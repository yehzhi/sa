<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die('連線失敗'.$conn->connect_error);
}
$vaddress = $_POST["vaddress"];
$account = $_SESSION['landlord']['account'];

$photo1 = $_FILES['photo1']['name'];
$tmp_name1 = $_FILES['photo1']['tmp_name'];
$target_dir = "verify/";
$target_file1 = $target_dir . basename($photo1);
move_uploaded_file($tmp_name1, $target_file1);


$photo2 = $_FILES['photo2']['name'];
$tmp_name2 = $_FILES['photo2']['tmp_name'];
$target_file2 = $target_dir . basename($photo2);
move_uploaded_file($tmp_name2, $target_file2);

$sql_max_id = "SELECT MAX(id) AS max_id FROM verify";
$result = $conn->query($sql_max_id);
$row = $result->fetch_assoc();
$max_id = $row["max_id"];

if ($max_id === null) {
    $max_id = 0;
}

$new_id = $max_id + 1;


$sql = "INSERT INTO verify (id,land, prove,vaddress,account) VALUES ('$new_id','$target_file1', '$target_file2','$vaddress','$account')";

if ($conn->query($sql) !== TRUE) {
    echo "提交驗證失敗!";

} else {
    echo "提交驗證成功!你的房屋編號是:",$new_id,"<br>";
    echo"您的驗證資料會經過負責人員審核。";  
    echo '
<meta http-equiv="refresh" content="2;url=index-lan.php">
';
    exit(); 
}


$conn->close();
?>