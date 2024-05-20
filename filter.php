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

$sql = "SELECT * FROM information WHERE 1=1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['rent'])) {
        $rent = $conn->real_escape_string($_POST['rent']);
        $sql .= " AND i_rent <= $rent";
    }
    if (!empty($_POST['roomstyle'])) {
        $roomstyle = $conn->real_escape_string($_POST['roomstyle']);
        $sql .= " AND i_roomstyle = '$roomstyle'";
    }
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['results'] = [];
    while($row = $result->fetch_assoc()) {
        $_SESSION['results'][] = $row;
    }
} else {
    $_SESSION['results'] = [];
}

$conn->close();

header("Location: result.php");
exit;
?>
