<?php
session_start();

// 連接數據庫
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 設置返回的內容類型為 JSON
header('Content-Type: application/json');

// 獲取 POST 數據
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['favorited'])) {
    $collect_id = $data['id'];
    $favorited = $data['favorited'];
    
    // 檢查 session 中的用戶賬號
    if (isset($_SESSION['tenant']['account'])) {
        $account = $_SESSION['tenant']['account'];
    } else {
        echo json_encode(["success" => false, "message" => "User not logged in"]);
        $conn->close();
        exit();
    }
    
    $vid = $collect_id; // 假設 collect_id 即為 vid

    if ($favorited) {
        // 插入收藏
        $sql = "INSERT INTO collect (account, vid) VALUES ('$account', '$vid')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["success" => true, "message" => "Favorite added successfully"]);
        } else {
            if ($conn->errno === 1062) {
                // 重複插入錯誤
                echo json_encode(["success" => false, "message" => "Already favorited"]);
            } else {
                echo json_encode(["success" => false, "message" => "Error adding favorite: " . $conn->error]);
            }
        }
    } else {
        // 刪除收藏
        $sql = "DELETE FROM collect WHERE account = '$account' AND vid = '$vid'";
        if ($conn->query($sql) === TRUE) {
            if ($conn->affected_rows > 0) {
                echo json_encode(["success" => true, "message" => "Favorite removed successfully"]);
            } else {
                echo json_encode(["success" => false, "message" => "Favorite not found"]);
            }
        } else {
            echo json_encode(["success" => false, "message" => "Error removing favorite: " . $conn->error]);
        }
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid data"]);
}

$conn->close();
?>
