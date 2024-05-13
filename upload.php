<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "19990817";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST["vid"];

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
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$filename = basename($_FILES["fileToUpload"]["name"]);
//$photo_data = file_get_contents($_FILES['fileToUpload']['tmp_name']);


if(isset($_POST['eq'])) {
    
    $checkbox_values = implode(",", $_POST['eq']);

    
    $sql = "INSERT INTO information(vid,i_title,i_address,i_photo,i_rent,i_gender,i_equip,i_roomstyle,i_entrance,i_walktime,i_introduce)  VALUES ('$id','$title','$address','$filename','$rent','$gender','$checkbox_values','$roomstyle','$entrance','$walktime','$introduce')";
    if ($conn->query($sql) !== TRUE) {
        ?>
        <script>
            alert("上架失敗!");
            location.href = "index-lan.php";
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
