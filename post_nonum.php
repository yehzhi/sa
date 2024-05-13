<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="sa";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('連線失敗'.$conn->connect_error);
}

$article = $_POST['article'];
$content = $_POST['content'];
$address = $_POST['address'];
$star_rate = $_POST['star_rate'];
$house_photo = $_POST['house_photo'];
$lastname = $conn->real_escape_string($_SESSION['tenant']['lastname']);
$gender = $_SESSION['tenant']['gender'];


// $account_parts = explode('@', $account);
// $account = $conn->real_escape_string($account_parts[0]);

$error_message = "";



$sql = "INSERT INTO post (article,content,address,star_rate,house_photo,lastname,gender) VALUES ('$article','$content','$address','$star_rate','$house_photo','$lastname','$gender')";
if ($conn->query($sql) === TRUE) {?>
        <script>
            alert("發文成功!");
            location.href = "discuss_nonum.html";
        </script>
     <?php

} else {?>
        <script>
            alert("發文失敗!");
            location.href = "post_nonum.html";
        </script>
        <?php $conn->error;
}
{

echo $error_message;
}
$conn->close();
?>