<?php
session_start();

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "sa";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 獲取當前用戶的帳號
$account = $_SESSION['tenant']['account'];

// 查詢用户的收藏列表
$sql = "SELECT * FROM collect WHERE account = '$account'";
$result = $conn->query($sql);

// 儲存用户的收藏列表
$favorites = array();

// 將收藏列表存到數組中
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {  
        $favorites[] = $row["vid"];
    }
}

// 將收藏列表以 JSON 格式返回给前端
echo json_encode(array("favorites" => $favorites));


$conn->close();
?>