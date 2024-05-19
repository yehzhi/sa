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


$conn->close();
?>