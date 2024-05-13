<?php
$servername = "localhost";
$username = "root";
$password = "19990817";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);
$vaddress = $_POST["vaddress"];

$photo1 = $_FILES['photo1']['name'];
$tmp_name1 = $_FILES['photo1']['tmp_name'];
$target_dir = "verify/";
$target_file1 = $target_dir . basename($photo1);
move_uploaded_file($tmp_name1, $target_file1);


$photo2 = $_FILES['photo2']['name'];
$tmp_name2 = $_FILES['photo2']['tmp_name'];
$target_file2 = $target_dir . basename($photo2);
move_uploaded_file($tmp_name2, $target_file2);

$sql_max_id = "SELECT MAX(v_id) AS max_id FROM verify";
$result = $conn->query($sql_max_id);
$row = $result->fetch_assoc();
$max_id = $row["max_id"];

if ($max_id === null) {
    $max_id = 0;
}

$new_id = $max_id + 1;


$sql = "INSERT INTO verify (v_id,v_land, v_prove,v_address) VALUES ('$new_id','$target_file1', '$target_file2','$vaddress')";

if ($conn->query($sql) !== TRUE) {
    echo "提交驗證失敗!";

} else {
    echo "提交驗證成功!你的房屋編號是:",$new_id ;
}


$conn->close();
?>

