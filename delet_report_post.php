<?php
$mysqli = new mysqli("localhost", "username", "password", "database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$post_id = $_POST['post_id'];

$stmt = $mysqli->prepare("DELETE FROM discuss_nonum WHERE post_id = ?");
$stmt->bind_param("i", $post_id);
$stmt->execute();

$stmt = $mysqli->prepare("DELETE FROM report WHERE post_id = ?");
$stmt->bind_param("i", $post_id);
$stmt->execute();

echo "文章已刪除";

$stmt->close();
$mysqli->close();
?>
