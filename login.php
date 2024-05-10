<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dt_m";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('連線失敗' . $conn->connect_error);
}
echo $_SERVER["REQUEST_METHOD"];
var_dump($_POST) ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST)) {
        echo "表單中沒有任何字段被提交";
    } else {
        // 如果有提交，則顯示所有提交的數據
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
    // echo "Usertype: " . $usertype;

    if ($usertype === 'l') {
        $sql = "SELECT * FROM lan_member WHERE account=? AND password=?";
    } elseif ($usertype === 't') {
        $sql = "SELECT * FROM te_member WHERE account=? AND password=?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $account, $password);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($usertype === 'l') {
            $_SESSION['landlord'] = $user;
            header("Location: index-lan.html");
        } elseif ($usertype === 't') {
            $_SESSION['tenant'] = $user;
            header("Location: index-te.html");
        }
        exit(); 
    } else {
        echo "帳號密碼錯誤";
        // header("Location: login.html");
        exit();
    }
} else {
    var_dump($_POST); // 檢查 POST 請求中的數據
    echo "錯誤"; 
}

$conn->close();