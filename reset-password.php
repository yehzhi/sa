<!DOCTYPE html>
<html lang="en">

<head>
	<title>輔仁大學租屋 重置密碼</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The Estate Teplate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sa";


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die('連線失敗' . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $token = $_POST['token'];
  $newPassword = $_POST['password'];
  $confirmPassword = $_POST['confirm_password'];

  
  if ($newPassword !== $confirmPassword) {
      echo "新密碼和確認新密碼不一致";
      exit;
  }

  // 找 token
  $stmt = $conn->prepare("SELECT account FROM pass_reset WHERE token = ? AND expire > NOW()");
  $stmt->bind_param("s", $token);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
      $stmt->bind_result($account);
      $stmt->fetch();
      $updateStmt1 = $conn->prepare("UPDATE lan_member SET password = ? WHERE account = ?");
      $updateStmt1->bind_param("ss", $newPassword, $account);
      $result1 = $updateStmt1->execute();

      $updateStmt2 = $conn->prepare("UPDATE te_member SET password = ? WHERE account = ?");
      $updateStmt2->bind_param("ss", $newPassword, $account);
      $result2 = $updateStmt2->execute();

      if ($result1 || $result2) {
          echo "密碼重置成功";
      } else {
          echo "密碼重置失敗，請重試";
      }

      
      $deleteStmt = $conn->prepare("DELETE FROM pass_reset WHERE token = ?");
      $deleteStmt->bind_param("s", $token);
      $deleteStmt->execute();
  } else {
      echo "無效的或已過期的重置連結";
  }
} else {
  if (isset($_GET['token'])) {
      $token = $_GET['token'];
  } else {
      echo "已無效";
      exit;
  }
}
?>


	<div class="container">
			
			 
				<style> 
				.custom-form {
					background-color: #a1a8c6;
					margin-top: 150px;
					margin-bottom: 150px;
					margin-right: auto;
					margin-left: auto;
					padding: 20px;
					border-radius: 5px;
					box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
					width: 500px;
                     }
					 .form-section {
                       display: none;
                       }
                     .form-section.active {
                      display: block;
                       }
				  .form-group {
					margin-bottom: 20px;
				  }
			
				  .form-group label {
					display: block;
					margin-bottom: 5px;
					font-weight: bold;
				  }
			
				  .form-group input,
				  .form-group select {
					width: 100%;
					padding: 8px;
					border: 1px solid #ccc;
					border-radius: 3px;
				  }
			
				  .form-group button {
					padding: 10px 20px;
					background-color: #f9e46c;
					color: #fff;
					border: none;
					border-radius: 3px;
					cursor: pointer;
				  }
			
				  .form-group button:hover {
					background-color:#f9e46c;
				  }
				

                .pass {
                 margin-bottom: 20px; 
                 }
                  .pass button{
					padding: 10px 20px;
					background-color: #a1a8c6;
					color: #fff;
					border: none;
					border-radius: 3px;
					cursor: pointer;
				  }
				  .pass button:hover {
					background-color:#555e81;
				  }
				  . no-border{
					border:none;
				  }
				  
				   .tab.active{
					background-color: #555e81;
					color:white;
				   }
				   .tab:hover{
					background-color: #555e81;
				   }
				   .button-container {
                     display: flex;
                      align-items: center;
                      }

                    .button-container button {
                     margin-right: 20px;
                     }
	.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
				</style>

             <div class="custom-form">
			  <h2>重置密碼</h2>
    <form method="POST" action="">
        <div class="form-group">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
        <label for="password">新密碼:</label>
        <input type="password" id="password" name="password" required>
        </div><br>
        <div class="form-group">
        <label for="confirm_password">確認新密碼:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        </div><br>
        <div class="button-container">
		<div class="form-group">
        <button type="submit" value="提交">送出</button></div>
    </form> 




	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/listings_custom.js"></script>
</body>

</html>


	


