<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "phpmailer/src/Exception.php";
include "phpmailer/src/PHPMailer.php";
include "phpmailer/src/SMTP.php";

$email=$_POST['email'];
$mail= new PHPMailer();               
$mail->IsSMTP();                                
$mail->SMTPAuth = true;                       
$mail->SMTPSecure = "tls";
$mail->Host = "m365.fju.edu.tw";
$mail->Host = "smtp-mail.outlook.com";             
$mail->Port = 587;     

session_start();
date_default_timezone_set('Asia/Taipei');
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="sa";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die('連線失敗'.$conn->connect_error);
}

if (isset($_SESSION['landlord'])) {
    $user = $_SESSION['landlord'];
} elseif (isset($_SESSION['tenant'])) {
    $user = $_SESSION['tenant'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account = $user['account'];

    // 檢查是否存在
     $stmt = $conn->prepare("SELECT account FROM lan_member WHERE account = ? UNION SELECT account FROM te_member WHERE account = ?");
     $stmt->bind_param("ss", $account, $account);
     $stmt->execute();
     $stmt->store_result();
 
     if ($stmt->num_rows > 0) {
        $token = bin2hex(random_bytes(50));
        $expire = date('Y-m-d H:i:s', strtotime('+1 hour')); 

    
        $stmt = $conn->prepare("INSERT INTO pass_reset (account, token, expire) VALUES (?, ?, ?)");
        $stmt->execute([$account, $token, $expire]);
     }
    }

$mail->CharSet = "utf-8";                       
    $mail->Username = "410401703@m365.fju.edu.tw"; 
    $mail->Password = "Rr08020927";                 
    $mail->From = "410401703@m365.fju.edu.tw";               
    $mail->Subject ="重置密碼"; //郵件標題
    $reset_link = "localhost/t/reset-password.php?token=$token";
    $mail->Body = "請點擊此連結以重置您的密碼: 
    <a href='$reset_link'>$reset_link</a>"; 
    $mail->IsHTML(true);                          
    $mail->AddAddress("$email");          
    if(!$mail->Send()){
        echo "failed " . $mail->ErrorInfo;
    }else{
        echo"<script>alert('發送成功,請至信箱點擊連結以重置密碼');</script>"; 
        echo"<script>window.location.href='index.php';</script>";
        
    }

 ?>
