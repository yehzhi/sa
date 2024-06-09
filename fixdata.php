<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

$vid = $_POST["fid"];

$ftitle = $_POST['fixtitle'];
$faddress = $_POST["fixaddress"];
$fmin = $_POST["minfixrent"];
$fmax = $_POST["maxfixrent"];
$fgender = $_POST["fixgender"];
$froomstyle = $_POST["fixroomstyle"];
$fentrance = $_POST["fixentrance"];
$fwalktime = $_POST["fixwalktime"];
$fintroduce = $_POST["fixintroduce"];
$feq = implode(",", $_POST['fixeq']);
$fen = implode(",", $_POST['fixentrance']);
$i_photo = $_FILES['i_photo']['name'];
$fixdeposit = $_POST["fixdeposit"];
$fixdeposit_amount = $_POST["fixdeposit_amount"];
$fixutility = $_POST["fixutility"];
$fixuamount = $_POST["fixuamount"];
$fixucal = $_POST["fixucal"];

$fixrentyesno = $_POST["rentyesno"];
if($fixrentyesno == "rentyes"){
    $sql2 = "DELETE FROM information WHERE vid= '$vid'";
    if ($conn->query($sql2) === TRUE) {
        
    } else {
        
    }

}else{

}
// 確認是否有新的圖片上傳
if(isset($_FILES["i_photo"]) && !empty($_FILES["i_photo"]["name"])) {
    $target_dir = "file/";
    $target_file = $target_dir . basename($_FILES["i_photo"]["name"]);
    $i_photo = basename($_FILES["i_photo"]["name"]);
    move_uploaded_file($_FILES['i_photo']['tmp_name'], $target_file);
} else {
    // 如果沒有新的圖片，保持原有的圖片不變
    $sql_select = "SELECT i_photo FROM information WHERE vid='$vid'";
    $result = $conn->query($sql_select);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $i_photo = $row["i_photo"];
        }
    }
}

$sql = "UPDATE information SET i_title='$ftitle', i_address='$faddress',i_photo='$i_photo',i_min='$fmin',i_max='$fmax',i_gender='$fgender',i_equip='$feq',i_roomstyle='$froomstyle',i_entrance='$fen',i_walktime='$fwalktime',i_introduce='$fintroduce' ,i_deposit='$fixdeposit',i_deposit_amount='$fixdeposit_amount',i_utility='$fixutility',u_amount='$fixuamount',u_cal='$fixucal'WHERE vid=$vid";

if ($conn->query($sql) !== TRUE) {
    ?>
    <script>
        alert("修改失敗!");
        location.href = "index-lan.php";
    </script>
<?php
} else {
    ?>
    <script>
        alert("修改成功!");
        location.href = "index-lan.php";
    </script>
<?php
}

$conn->close();
?>

