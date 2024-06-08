<?php
session_start();
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="sa";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('連線失敗'.$conn->connect_error);
}

if (isset($_SESSION['landlord'])) {
    $user = $_SESSION['landlord'];
} elseif (isset($_SESSION['tenant'])) {
    $user = $_SESSION['tenant'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account=$user['account'];
    $usertype=$user['usertype'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($usertype === 'l') {
        $sql = "SELECT password FROM lan_member WHERE account = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $account);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($dbPassword);
        $stmt->fetch();

        if ($current_password === $dbPassword) {
            // 驗證新密碼和確認新密碼
            if ($new_password === $confirm_password) {
                // 更新密碼
                $updateSql = "UPDATE lan_member SET password = ? WHERE account = ?";
                $updateStmt = $conn->prepare($updateSql);
                $updateStmt->bind_param("ss", $new_password, $account);
                if ($updateStmt->execute()) {
                    echo "<script>alert('密碼更新成功');</script>";
                    echo"<script>window.location.href='info.php';</script>";
                    exit();
                } else {
                    echo"<script>alert('密碼更新失敗,請重試');</script>"; 
                    echo"<script>window.location.href='info.php';</script>";
                }
            } else {
                echo "<script>alert('新密碼和確認新密碼不一致。');</script>"; 
                echo"<script>window.location.href='info.php';</script>";
            }
        } else {
            echo "<script>alert('當前密碼錯誤,可以從忘記密碼重新設定。');</script>"; 
            echo"<script>window.location.href='info.php';</script>";
        }
    } else {
        echo "無效的用戶類型。";
    }
}
?>
