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

$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $filename = basename($_FILES["file"]["name"]);
if(isset($_POST['eq'])) {
    
    $checkbox_values = implode(",", $_POST['eq']);

    
    $sql = "INSERT INTO information(i_title,i_address,i_photo,i_rent,i_gender,i_equip,i_roomstyle,i_entrance,i_walktime,i_introduce)  VALUES ('$title','$address','$filename','$rent','$gender','$checkbox_values','$roomstyle','$entrance','$walktime','$introduce')";
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
    if($_FILES['file']['error']>0){
            exit("檔案上傳失敗！");//如果出現錯誤則停止程式
          }
          move_uploaded_file($_FILES['file']['tmp_name'],'file/'.$_FILES['file']['name']);//複製檔案
    }
    
} else {
    echo "請選擇房屋設備!";
}


$conn->close();
?>
