<!DOCTYPE html>
<html lang="en">
<head>
	<title>我的收藏</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The Estate Teplate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>
<body>

<header class="header trans_300">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="header_container d-flex flex-row align-items-center trans_300">
					<div class="logo_container">
						<a href="#">
							<div class="logo">
								<img src="images/logo_fju.jpg" alt="" style="width: 65px; height: 65px;margin-right: 10px;">
								<span>輔仁大學租屋網</span>
							</div>
						</a>
					</div>
					<nav class="main_nav">
						<ul class="main_nav_list">
							<li class="main_nav_item"><a href="index-te.html">首頁</a></li>
							<li class="main_nav_item">
								<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
									<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
								</div>
							</li>
							<li class="main_nav_item"><a href="discuss.html">我的收藏</a></li>
							<li class="main_nav_item">
								<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i>
								</a>
								<ul class="dropdown-menu" style="background-color: #a1a8c6;">
									<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>
									<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>
									<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>
								</ul>
							</li>
						</ul>
					</nav>
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

<div class="super_container"></div>
<div class="home1">
	<div class="hello" style="color: #555e81;"></div>
</div>

<div class="container" >
	<div class="row">
		<div class="col">
			<div class="home_content">
			</div>
		</div>
	</div>
</div>

<div class="listings">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12 listings_col">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = ""; 
				$dbname = "sa";

				
				$conn = new mysqli($servername, $username, $password, $dbname);

				
				if ($conn->connect_error) {
				    die("连接失败: " . $conn->connect_error);
				}

				
				$sql = "SELECT * FROM collect WHERE account = '$_SESSION['tenant']['account']'";
				$result = $conn->query($sql);

				
				if ($result->num_rows > 0) {
				   
				    while($row = $result->fetch_assoc()) {  
						$collect_id = $row["collect_id"];
				        $account = $row["account"];
				        $verify_id = $row["verify_id"];
				       

				        
				        echo '<div class="listing_item">';
				        echo '<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">';
				        echo '<div class="listing_content">';
						echo '<div class="listing_title"><a href="detail.php?verify_id=' . $verify_id . '">房屋編號' . $verify_id . '</a></div>';
				        echo '<div class="listing_text"><br>收藏編號:' . $collect_id .'</div>';
						// echo "<img src='$path' alt=''>";
				        echo '</div>';
				        echo '</div>';
				        echo '</div>';
				    }
				} else {
				   
				    echo "0 结果";
				}

				
				$conn->close();
				?>
			</div>
		</div>
	</div>
</div>

<div class="credits">
	<span><i class="fa"></i></span>
</div>



<script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>	
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/listings_custom.js"></script>
</body>
</html>
