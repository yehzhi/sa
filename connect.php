<?php
    $servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="dt_m";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die('連線失敗'.$conn->connect_error);
}

$account = $_POST['account'];
$password = $_POST['password'];
$password_check = $_POST['password_check'];
$lastname = $conn->real_escape_string($_POST['lastname']);
$firstname = $conn->real_escape_string($_POST['firstname']);
$gender = $_POST['gender']; 
$iden = $_POST['iden']; 

// $account_parts = explode('@', $account);
// $account = $conn->real_escape_string($account_parts[0]);

$error_message = "";



if ($password !== $password_check) {
    $error_message .= "請確認密碼與密碼一致。<br>";
}
$account_check_query="SELECT*FROM lan_member WHERE account ='$account'LIMIT 1";
$result= $conn->query($account_check_query);
if($result && $result->num_rows >0){
    $error_message .="帳號已存在。<br>";
}


$sql = "INSERT INTO lan_member (account, password,lastname,firstname,gender,iden,usertype) VALUES ('$account','$password','$lastname','$firstname','$gender','$iden','l')";
if ($conn->query($sql) === TRUE) {
        echo "註冊成功，您的帳號為".$account;
        header("location: login.html");

    } else {
        echo "註冊失敗: " . $conn->error;
    }
  {
    
    echo $error_message;
}
$conn->close();


