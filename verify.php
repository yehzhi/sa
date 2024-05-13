<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);
$vaddress = $_POST["vaddress"];
$prove = $_POST["prove"];
$land = $_POST["land"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    /*$photo1_name = $_FILES['land']['name'];
    $photo1_data = file_get_contents($_FILES['land']['tmp_name']);

    $photo2_name = $_FILES['prove']['name'];
    $photo2_data = file_get_contents($_FILES['prove']['tmp_name']);*/

    $sql = "INSERT INTO verify (land,prove,vaddress) VALUES ('$land', '$prove','$vaddress')";

    if ($conn->query($sql) !== TRUE) {
        ?>
        <script>
            alert("未成功提交驗證!");
            location.href = "index-lan.php";
        </script>
    <?php
    } else {
        ?>
        <script>
            alert("已成功提交驗證!");
            location.href = "index-lan.php";
        </script>
    <?php
    }
    
} else {
}


$conn->close();

?>
