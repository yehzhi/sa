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
$frent = $_POST["fixrent"];
$fgender = $_POST["fixgender"];
$froomstyle = $_POST["fixroomstyle"];
$fentrance = $_POST["fixentrance"];
$fwalktime = $_POST["fixwalktime"];
$fintroduce = $_POST["fixintroduce"];
$fcheckbox_values = implode(",", $_POST['fixeq']);


$sql = "UPDATE information SET i_title='$ftitle', i_address='$faddress',i_rent='$frent',i_gender='$fgender',i_equip='$fcheckbox_values',i_roomstyle='$froomstyle',i_entrance='$fentrance',i_walktime='$fwalktime',i_introduce='$fintroduce' WHERE vid=$vid";

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
