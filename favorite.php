<?php
// favorite.php
header('Content-Type: application/json');

// 模拟数据库连接
$conn = new mysqli("localhost", "username", "password", "database");

// 检查数据库连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 获取 POST 数据
$postData = file_get_contents("php://input");
$request = json_decode($postData, true);

if (isset($request['collect_id']) && isset($request['favorited'])) {
    $collect_id = $request['collect_id'];
    $favorited = $request['favorited'];

    // 准备 SQL 语句
    $sql = "";
    if ($favorited) {
        $sql = "UPDATE collect SET favorite = 1 WHERE id = '$collect_id'";
    } else {
        $sql = "UPDATE collect SET favorite = 0 WHERE id = '$collect_id'";
    }

    // 执行 SQL 语句
    if ($conn->query($sql) === TRUE) {
        // 返回成功响应
        echo json_encode(['success' => true]);
    } else {
        // 返回失败响应
        echo json_encode(['success' => false, 'message' => 'Database operation failed']);
    }
} else {
    // 返回错误响应
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
}

// 关闭数据库连接
$conn->close();
?>
