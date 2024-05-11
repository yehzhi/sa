<?php
$servername = "localhost";
$username = "root";
$password = "19990817";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);
$vaddress = $_POST["vaddress"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $photo1_name = $_FILES['land']['name'];
    $photo1_data = file_get_contents($_FILES['land']['tmp_name']);

    $photo2_name = $_FILES['prove']['name'];
    $photo2_data = file_get_contents($_FILES['prove']['tmp_name']);

    $sql = "INSERT INTO verify (v_land,v_prove,v_address) VALUES ('$photo1_name', '$photo2_name','$vaddress')";

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
