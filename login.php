<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";


$conn = new mysqli($servername, $username, $password, $dbname) ;
if ($conn->connect_error) {
    die('連線失敗' . $conn->connect_error);
}
echo $_SERVER["REQUEST_METHOD"];
var_dump($_POST) ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST)) {
        echo "表單中沒有任何字段被提交";
    } else {
        echo "提交的數據：";
        print_r($_POST);
    }
} else {
    echo "表單尚未提交";
}
if (isset($_POST['account']) && isset($_POST['password']) && isset($_POST['uu'])) {
    $account = $_POST['account'];
    $password = $_POST['password'];
    $usertype = $_POST['uu'];

    if ($usertype === 'l') {
        $sql = "SELECT * FROM lan_member WHERE account=? AND password=? AND status='approved'";
    } elseif ($usertype === 't') {
        $sql = "SELECT * FROM te_member WHERE account=? AND password=? AND status='approved'";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $account, $password);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($usertype === 'l') {
            $_SESSION['landlord'] = $user;
            $_SESSION['landlord']['account'] = $user['account'];
            $_SESSION['landlord']['gender'] = $user['gender'];
            header("Location: index-lan.php");
        } elseif ($usertype === 't') {
            $_SESSION['tenant'] = $user;
            $_SESSION['tenant']['account'] = $user['account'];
            $_SESSION['tenant']['gender'] = $user['gender'];
            $_SESSION['tenant']['lastname'] = $user['lastname'];
            header("Location: index-te.php");
        }
        exit(); 
    } else {
        echo "帳號密碼錯誤";
        exit();
    }
} else {
    var_dump($_POST); 
    echo "錯誤"; 
}

$conn->close();
