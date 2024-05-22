<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

// 建立資料庫連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}



// 檢查是否收到 POST 請求中的 vid 參數
if (isset($_POST['vid'])) {
    $selectedValue = $_POST['vid'];

    // 使用 prepared statement 避免 SQL 注入
    $stmt = $conn->prepare("SELECT v_address FROM verify WHERE vid=?");
    $stmt->bind_param("i", $selectedValue); // i 表示綁定的參數是整數型態
    $stmt->execute();
    $stmt->bind_result($v_address);

    // 如果有結果，將 v_address 存入變數中
    if ($stmt->fetch()) {
        echo $v_address; // 將 v_address 返回給前端 JavaScript
    } else {
        echo "No address found"; // 如果沒有結果，返回一個提示消息
    }

    $stmt->close();
} else {
    echo "No vid parameter received"; // 如果沒有收到 vid 參數，返回一個提示消息
}

$conn->close();
?>