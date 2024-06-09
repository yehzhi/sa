<!DOCTYPE html>
<html lang="en">

<head>
	<title>輔仁大學租屋 首頁</title>
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



	<div class="super_container">

		
	</div>

	<!-- Home -->
	<div class="home1">

		<div class="hello" style="color: #555e81;"></div>


		</div>

	</div>

	<!-- Header -->

	<header class="header trans_300">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center trans_300">

						<!-- Logo -->

						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo_fju.jpg" alt=""
										style="width: 65px; height: 65px;margin-right: 10px;">
									<span style="margin-left:1px;margin-top: 0.5px;">輔仁大學租屋網</span>
								</div>
							</a>
						</div>

						<!-- Main Navigation -->

						<?php
                            session_start();
                            if (isset($_SESSION['tenant']['account'])) {
                                // 如果用戶已登入
                                echo '<nav class="main_nav">';
                                echo '<ul class="main_nav_list">';
                                echo '<li class="main_nav_item"><a href="index-te.php">首頁</a></li>';
                                echo '<li class="main_nav_item">';
                                echo '<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>';
                                echo '<div class="dropdown-menu"  style="background-color: #a1a8c6;">';
                                echo '<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>';
                                echo '<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>';
                                echo '<a class="dropdown-item" href="my_post_num.php">我的發文</a>';
                                echo '</div>';
                                echo '</li>';
                                echo '<li class="main_nav_item"><a href="collect.php">我的收藏</a></li>';
                                echo '<li class="main_nav_item">';
                                echo '<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                                echo '<i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i>';
                                echo '</a>';
                                echo '<ul class="dropdown-menu" style="background-color: #a1a8c6;">';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.php">修改個人資料</a></li>';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>';
                                echo '</ul>';
                                echo '</li>';
                                echo '</ul>';
                                echo '</nav>';
                            } elseif(isset($_SESSION['landlord']['account'])){
                                    echo '<nav class="main_nav">';
                                    echo '<ul class="main_nav_list">';
                                    echo '<li class="main_nav_item"><a href="index-lan.php">我的房屋</a></li>';
                                    echo '<li class="main_nav_item">';
                                    echo '<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">新增房屋</a>';
                                    echo '<div class="dropdown-menu" style="background-color: #a1a8c6;">';
                                    echo '<a class="dropdown-item" href="verifyhouse.html">驗證房屋</a>';
                                    echo '<a class="dropdown-item" href="uploadpage.php">上架房屋</a>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li class="main_nav_item">';
                                    echo '<a href="discuss.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>';
                                    echo '<div class="dropdown-menu" style="background-color: #a1a8c6;">';
                                    echo '<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>';
                                    echo '<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li class="main_nav_item">';
                                    echo '<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></a>';
                                    echo '<ul class="dropdown-menu" style="background-color: #a1a8c6;">';
                                    echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.php">修改個人資料</a></li>';
                                    echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>';
                                    echo '</ul>';
                                    echo '</li>';
                                    echo '</ul>';
                                    echo '</nav>';
                                
                            }
                            else {
                                // 如果用戶未登入
								echo '<nav class="main_nav">';
                                echo '<ul class="main_nav_list">';
                                echo '<li class="main_nav_item"><a href="index.php">首頁</a></li>';
                                echo '<li class="main_nav_item">';
                                echo '<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>';
                                echo '<div class="dropdown-menu"  style="background-color: #a1a8c6;">';
                                echo '<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>';
                                echo '<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>';
                                echo '</div>';
                                echo '</li>';
								echo '</li>';
                                echo '</ul>';
                                echo '</nav>';
                                echo '<div class="phone_home text-center" style="border-radius: 10px;">';
                                echo '<span><a href="login.html">登入</a></span>';
                                echo '</div>';
                            }
                            ?>
                            <div class="hamburger_container menu_mm">
                                <div class="hamburger menu_mm">
                                    <i class="fas fa-bars trans_200 menu_mm"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
<?php
session_start();


if (!isset($_SESSION['landlord']) && !isset($_SESSION['tenant'])) {
    header("Location: login.html"); 
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('連線失敗' . $conn->connect_error);
}


if (isset($_SESSION['landlord'])) {
    $user = $_SESSION['landlord'];
} elseif (isset($_SESSION['tenant'])) {
    $user = $_SESSION['tenant'];
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $n_useraccount = $_POST['account'];
    $n_lastname = $_POST['lastname'];
    $n_firstname = $_POST['firstname'];
    $o_user = $user['account']; 
    $usertype=$user['usertype'];
    echo "$o_user";

    // 更新
    if ($usertype === 'l') {
    $sql = "UPDATE lan_member SET account=?, lastname=?, firstname=? WHERE account=?";
} elseif ($usertype === 't') {
    $sql = "UPDATE te_member SET account=?, lastname=?, firstname=? WHERE account=?";
}

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $n_useraccount, $n_lastname, $n_firstname, $o_user);

    if ($stmt->execute()) {
        
        $user['account'] = $n_useraccount;
        $user['lastname'] = $n_lastname;
        $user['firstname'] = $n_firstname;

			echo "<script>alert('編輯成功！');</script>";
		} else {
			echo "更新失敗：" . $stmt->error;
		}
}


$conn->close();
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
				  .tabs {
                    display: flex;
                    justify-content: space-around;
                    margin-bottom: 20px;
                   }
                  .tab {
                    cursor: pointer;
					padding:10px;
					background-color: #a1a8c6;
					color:white;
					border-radius: 5px 5px 5px 5px;
					transition: background-color 0.3s;
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
			 <div class="tabs">
            <div class="tab active" id="personal-info-tab">個人資料</div>
            <div class="tab" id="change-password-tab">修改密碼</div>
        </div>

				<div class="form-section active" id="personal-info-form">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group">
				<label for="account">帳號:</label>
				  <input type="email" id="account" name="account" value="<?php echo $user['account']; ?>"><br><br>
				</div>
				<div class="form-group">
				  <label for="lastname">姓:</label>
				  <input type="text" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>"><br><br>
				</div>
				<div class="form-group">
				  <label for="firstname">名:</label>
				  <input type="text" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>"><br><br>
				</div>
				
				<div class="form-group">
				  <button type="submit" >保存</button>
				</div>
			</form>
			</div>

			<div class="form-section" id="change-password-form">
            <form action="passw.php" method="post">
			<div class="form-group">
                <label for="current-password">當前密碼：</label>
                <input type="password" id="current_password" name="current_password" required><br><br>
				</div>
				<div class="form-group">
                <label for="new-password">新密碼：</label>
                <input type="password" id="new_password" name="new_password" required><br><br>
			</div>
			<div class="form-group">
                <label for="confirm-password">確認新密碼：</label>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>
			</div>
			
			
    <div class="button-container">
		<div class="form-group">
        <button type="submit" value="提交">更改</button></div>
		<span style="margin-left:200px;"></span>
		<div class="pass">
        <button type="button" onclick="openModal()">忘記密碼</button></div>
    </div>
</form>




<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div style="text-align:center;">
		<h5>重設密碼</h5>
        <p>請輸入您的電子郵件：</p>
        <form method="post" action="request.php">
            <input type="email" id="email" name="email" required>
            <br><br>
            <div class="form-group">
        <button type="submit" value="提交">送出</button></div>
        </form>
	</div>
    </div>
</div>


		</div>
		</div>
		</div>
			
			

			

	
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer About -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">
						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo.png" alt="">
									<span>the estate</span>
								</div>
							</a>
						</div>
					</div>
					<div class="footer_social">
						<ul class="footer_social_list">
							<li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="footer_about">
						<p>Lorem ipsum dolor sit amet, cons ectetur quis ferme adipiscing elit. Suspen dis se tellus
							eros, placerat quis ferme ntum et, viverra sit amet lacus. Nam gravida quis ferme semper
							augue.</p>
					</div>
				</div>

				<!-- Footer Useful Links -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">useful links</div>
					<ul class="footer_useful_links">
						<li class="useful_links_item"><a href="#">Listings</a></li>
						<li class="useful_links_item"><a href="#">Favorite Cities</a></li>
						<li class="useful_links_item"><a href="#">Clients Testimonials</a></li>
						<li class="useful_links_item"><a href="#">Featured Listings</a></li>
						<li class="useful_links_item"><a href="#">Properties on Offer</a></li>
						<li class="useful_links_item"><a href="#">Services</a></li>
						<li class="useful_links_item"><a href="#">News</a></li>
						<li class="useful_links_item"><a href="#">Our Agents</a></li>
					</ul>
				</div>

				<!-- Footer Contact Form -->
				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">say hello</div>
					<div class="footer_contact_form_container">
						<form id="footer_contact_form" class="footer_contact_form" action="post">
							<input id="contact_form_name" class="input_field contact_form_name" type="text"
								placeholder="Name" required="required" data-error="Name is required.">
							<input id="contact_form_email" class="input_field contact_form_email" type="email"
								placeholder="E-mail" required="required" data-error="Valid email is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message"
								placeholder="Message" required="required"
								data-error="Please, write us a message."></textarea>
							<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200"
								value="Submit">send</button>
						</form>
					</div>
				</div>

				<!-- Footer Contact Info -->

				<div class="col-lg-3 footer_col">
					<div class="footer_col_title">contact info</div>
					<ul class="contact_info_list">
						<li class="contact_info_item d-flex flex-row">
							<div>
								<div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
							</div>
							<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div>
								<div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
							</div>
							<div class="contact_info_text">2556-808-8613</div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div>
								<div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
							</div>
							<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello"
									target="_top">contactme@gmail.com</a></div>
						</li>
						<li class="contact_info_item d-flex flex-row">
							<div>
								<div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
							</div>
							<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</footer>

	<!-- Credits -->

	<div class="credits">
		<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;
			<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with
			<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
				target="_blank">Colorlib</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</span>
	</div>

	</div>
	<script>
        document.getElementById('personal-info-tab').addEventListener('click', function() {
            document.getElementById('personal-info-form').classList.add('active');
            document.getElementById('change-password-form').classList.remove('active');
            this.classList.add('active');
            document.getElementById('change-password-tab').classList.remove('active');
        });

        document.getElementById('change-password-tab').addEventListener('click', function() {
            document.getElementById('personal-info-form').classList.remove('active');
            document.getElementById('change-password-form').classList.add('active');
            this.classList.add('active');
            document.getElementById('personal-info-tab').classList.remove('active');
        });
        // 預設顯示個人資料表單
        document.getElementById('personal-info-form').classList.add('active');
		</script>
		<script>
    // 開啟模態
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    // 關閉模態
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/listings_custom.js"></script>
</body>

</html>