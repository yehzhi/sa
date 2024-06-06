<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = intval($_POST['post_id']);
    $reasons = $_POST['reason'];

    if (!empty($reasons)) {
        foreach ($reasons as $reason) {
            $reason = $conn->real_escape_string($reason);
            $sql = "INSERT INTO reports (post_id, reason) VALUES ('$post_id', '$reason')";
            if ($conn->query($sql) === TRUE) {
                echo "檢舉已提交";
            } else {
                echo "錯誤: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>
