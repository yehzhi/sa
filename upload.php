<?php
session_start();
if (!isset($_SESSION['landlord']['account'])) {
    header("Location: login.html");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dt_m";

$conn = new mysqli($servername, $username, $password, $dbname);



$title = $_POST["title"];
$address = $_POST["address"];
$rent = $_POST["rent"];
$gender = $_POST["gender"];
$equip = $_POST["eq"];
$roomstyle = $_POST["roomstyle"];
$entrance = $_POST["entrance"];
$walktime = $_POST["walktime"];
$introduce = $_POST["introduce"];
$filename = $_FILES['file']['name']; 

$target_dir = "uploads/"; 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 

$filename = basename($_FILES["fileToUpload"]["name"]);


echo "".$_FILES['file']['name'];
move_uploaded_file($_FILES['fileToUpload']['tmp_name'],'file/'.$_FILES['fileToUpload']['name']);



if(isset($_POST['eq'])) {
    
    $checkbox_values = implode(",", $_POST['eq']);

    
    $sql = "INSERT INTO information(l_name,i_title,i_address,i_photo,i_rent,i_gender,i_equip,i_roomstyle,i_entrance,i_walktime,i_introduce)  VALUES ('". $_SESSION['landlord']['account'] ."','$title','$address','$filename','$rent','$gender','$checkbox_values','$roomstyle','$entrance','$walktime','$introduce')";
        if ($conn->query($sql) !== TRUE) {
            ?>
        <script>
            alert("上架失敗!");
            location.href = "upload.html";
        </script>
    <?php
    } else {
        ?>
        <script>
            alert("上架成功!");
            location.href = "index-lan.php";
        </script>
    <?php

    }
    
} else {
    echo "請選擇房屋設備!";
}


$conn->close();
?>
