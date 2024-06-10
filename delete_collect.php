<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 確保使用者已登入
    if (!isset($_SESSION['tenant']['account'])) {
        header("Location: login.php"); // 轉發到登入頁面
        exit;
    }

    // 確認是否收到 collect_id
    if (!isset($_POST['collect_id'])) {
        // 如果沒有收到 collect_id，則顯示錯誤消息
        echo "未收到收藏編號";
        exit;
    }

    $collect_id = $_POST['collect_id'];

    // 連接到資料庫
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 執行刪除操作
    $sql = "DELETE FROM collect WHERE collect_id = '$collect_id'";
    if ($conn->query($sql) === TRUE) {
        // 刪除成功
        header("Location: collect.php");
    } else {
        // 刪除失敗
        echo "刪除收藏失敗: " . $conn->error;
    }

    $conn->close();
} else {
    // 如果不是 POST 請求，顯示錯誤消息
    echo "非法請求";
}
?>