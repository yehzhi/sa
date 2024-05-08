<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s";

$conn = new mysqli($servername, $username, $password, $dbname);

$ftitle = $_POST["fixtitle"];
$faddress = $_POST["fixaddress"];

$frent = $_POST["fixrent"];
$fgender = $_POST["fixgender"];
$fequip = $_POST["fixeq"];
$froomstyle = $_POST["fixroomstyle"];
$fentrance = $_POST["fixentrance"];
$fwalktime = $_POST["fixwalktime"];
$fintroduce = $_POST["fixintroduce"];

if(isset($_POST['fixeq'])) {
    
    $fcheckbox_values = implode(",", $_POST['fixeq']);

    
    $sql = "UPDATE information SET i_title = '$ftitle',i_address = '$faddress',i_rent = '$frent',i_gender = '$fgender',i_equip = '$fcheckbox_values',i_roomstyle = '$froomstyle',i_entrance = '$fentrance',i_walktime = '$fwalktime',i_introduce = '$fintroduce'";
    if ($conn->query($sql) !== TRUE) {
        echo "修改失敗!";
    } else {
        echo "修改成功!";
    }
} else {
    echo "請選擇房屋設備!";
}


$conn->close();
?>