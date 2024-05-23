<?php
session_start();
if (!isset($_SESSION['landlord']['account'])) {
    header("Location: login.html");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

$vid = $_POST["vid"];
$title = $_POST["title"];
$address = $_POST["address"];
$price_min = $_POST["price_min"];
$price_max = $_POST["price_max"];
$gender = $_POST["gender"];
$equip = $_POST["eq"];
$roomstyle = $_POST["roomstyle"];
$entrance = $_POST["entrance"];
$deposit=$_POST["deposit"];
$deposit_amount=$_POST["deposit_amount"];
$utility=$_POST["utility"];
$u_amount=$_POST["u_amount"];
$u_cal=$_POST["u_cal"];
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
    $checkbox2 = implode(",", $_POST['entrance']);

    
    $sql = "INSERT INTO information(l_name,i_title,i_address,i_photo,i_min,i_max,i_gender,i_equip,i_roomstyle,i_entrance,i_deposit,i_deposit_amount,i_utility,u_amount,u_cal,i_walktime,i_introduce)  VALUES ('". $_SESSION['landlord']['account'] ."','$title','$address','$filename','$price_min','$price_max','$gender','$checkbox_values','$roomstyle','$checkbox2','$deposit','$deposit_amount','$utility','$u_amount','$u_cal','$walktime','$introduce')";
        if ($conn->query($sql) !== TRUE) {
            ?>
        <script>
            alert("上架失敗!");
            location.href = "uploadpage.php";
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
