<?php
session_start();

// 连接数据库
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

// 设置返回的内容类型为 JSON
header('Content-Type: application/json');

// 获取 POST 数据
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['favorited'])) {
    $vid = $data['id'];
    $favorited = $data['favorited'];

    // 检查 session 中的用户账户
    if (isset($_SESSION['tenant']['account'])) {
        $account = $_SESSION['tenant']['account'];
    } else {
        echo json_encode(["success" => false, "message" => "User not logged in"]);
        $conn->close();
        exit();
    }

    if ($favorited) {
    // 插入收藏
    $stmt = $conn->prepare("INSERT INTO collect (vid, account) VALUES (?, ?)");
    $stmt->bind_param("ss", $vid, $account);
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Favorite added successfully", "favorited" => true]);
    } else {
        if ($conn->errno === 1062) {
            // 重复插入错误
            echo json_encode(["success" => false, "message" => "Already favorited", "favorited" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Error adding favorite: " . $conn->error, "favorited" => false]);
        }
    }
    $stmt->close();
    } 
} else {
    echo json_encode(["success" => false, "message" => "Invalid data"]);
}

$conn->close();
?>
