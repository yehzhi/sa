<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 確保使用者已登入，可以根據你的登入驗證方法進行修改
    if (!isset($_SESSION['tenant']['account'])) {
        header("Location: login.html"); // 轉發到登入頁面
        exit;
    }
    // 確認是否收到 post_id
    if (!isset($_POST['post_id'])) {
        // 如果沒有收到 post_id，則顯示錯誤消息
        echo "未收到文章編號";
        exit;
    }

    // 連接到資料庫
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    $post_id = $_POST['post_id'];
    $verify_id = isset($_POST['verify_id']) ? $_POST['verify_id'] : '';


    // 準備SQL刪除語句
    if (!empty($verify_id)) {
        // 如果vid存在，從有編號的資料表中刪除
        $deleteQuery = "DELETE FROM numbered_post WHERE post_id = ? AND verify_id = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param("ii", $post_id, $verify_id);
    } else {
        // 如果vid不存在，從沒有編號的資料表中刪除
        $deleteQuery = "DELETE FROM post WHERE post_id = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param("i", $post_id);
    }
    // 執行刪除操作
    if ($stmt->execute()) {
        echo "<script>alert('文章已成功刪除');window.history.back();</script>";
    } else {
        echo "錯誤: " . $stmt->error;
    }

    // 關閉連接
    $stmt->close();
    $conn->close();
}
?>