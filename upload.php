<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s";

$conn = new mysqli($servername, $username, $password, $dbname);

$title = $_POST["title"];
$address = $_POST["address"];
//$target_dir = "uploads/";
//$_FILES['image']['type'];
$rent = $_POST["rent"];
$gender = $_POST["gender"];
$equip = $_POST["eq"];
$roomstyle = $_POST["roomstyle"];
$entrance = $_POST["entrance"];
$walktime = $_POST["walktime"];
$introduce = $_POST["introduce"];

if(isset($_POST['eq'])) {
    
    $checkbox_values = implode(",", $_POST['eq']);

    
    $sql = "INSERT INTO information(i_title,i_address,i_rent,i_gender,i_equip,i_roomstyle,i_entrance,i_walktime,i_introduce)  VALUES ('$title','$address','$rent','$gender','$checkbox_values','$roomstyle','$entrance','$walktime','$introduce')";
    if ($conn->query($sql) !== TRUE) {
        echo "上架失敗!";
    } else {
        echo "上架成功!";
    }
} else {
    echo "請選擇房屋設備!";
}


$conn->close();
?>