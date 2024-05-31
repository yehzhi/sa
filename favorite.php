<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

//  JSON
header('Content-Type: application/json');

//
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['id']) && isset($data['favorited'])) {
    $vid = $data['id'];
    $favorited = $data['favorited'];

    // 
    if (isset($_SESSION['tenant']['account'])) {
        $account = $_SESSION['tenant']['account'];
    } else {
        echo json_encode(["success" => false, "message" => "User not logged in"]);
        $conn->close();
        exit();
    }

    if ($favorited) {
        $sql_max_id = "SELECT MAX(collect_id) AS max_id FROM collect";
        $result = $conn->query($sql_max_id);
        $row = $result->fetch_assoc();
        $max_id = $row["max_id"];

        if ($max_id === null) {
            $max_id = 0;
        }

        $new_id = $max_id + 1;
    // 插入收藏
    $stmt = $conn->prepare("INSERT INTO collect (collect_id, vid, account) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $new_id, $vid, $account);
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Favorite added successfully", "favorited" => true]);
    } else {
        if ($conn->errno === 1062) {
            // 
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
