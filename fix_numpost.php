<!DOCTYPE html>
<html lang="en">

<head>
	<title>修改發文</title> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The Estate Teplate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>
			<?php
                session_start();

                if (!isset($_SESSION['tenant'])) {
                    header("Location: login.html");
                    exit;
                }
            ?>
<body>
	<div class="super_container"></div>
	<div class="home1">
		<div class="hello" style="color: #555e81;"></div>
	</div>
	</div>
	<header class="header trans_300">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center trans_300">
						<div class="logo_container">
							<a href="#">
								<div class="logo">
									<img src="images/logo_fju.jpg" alt=""
										style="width: 65px; height: 65px;margin-right: 10px;">
									<span style="margin-left:1px;margin-top: 0.5px;">輔仁大學租屋網</span>
								</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index-te.php">首頁</a></li>
								<li class="main_nav_item">
									<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">討論區</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
										<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
										<a class="dropdown-item" href="my_post_num.php">我的發文</a>
									</div>
								</li>							
								<li class="main_nav_item"><a href="collect.php">我的收藏</a></li>
								<li class="main_nav_item"><a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a>
								<ul class="dropdown-menu" style="background-color: #a1a8c6;">
										<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.php">修改個人資料</a></li>
										<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>
									</ul>
								</div>
							</li>
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
    <style>
        .search_box_content {
            max-width: 600px; /* 調整表格最大寬度 */
            margin: 0 auto; /* 讓表格水平置中 */
        }
    </style>
	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>修改發文</b></h1>
				</div>
			</div>
		</div>
	</div>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "sa";
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            $post_id = $_GET['post_id'];
            $sql = "SELECT * FROM numbered_post WHERE post_id = $post_id ";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {


                while ($row = $result->fetch_assoc()) {
                    
                    $verify_id = $row["verify_id"];
                    $article= $row["article"];
                    $address = $row["address"];
                    $content = $row['content'];
                    $star_rate = $row['star_rate'];
                    $house_photo = $row['house_photo']; 
                    $path = 'postn/' . $house_photo;
                    ?>
	<hr>
	<div class="listings">
        <div class="container">
            <div class="row">
                <div class="search_box_content" style="margin-top: -50px;">
                    <form class="search_form" action="fix_numpost2.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">

                        <div class="search_box_container">
                            <ul class="dropdown_row clearfix">
                                <div class="dropdown_item_title_login">房屋編號</div>
                                <div class="mb-3">
                                <input type="hidden" id="verify_id" name="verify_id" value="<?php echo $verify_id; ?>">
                                <input type="text" class="form-control" id="verify_id_display" value="<?php echo $verify_id; ?>" disabled>
                            </div>
								<div class="dropdown_item_title_login">標題</div>
								<div class="mb-3">
									<input type="text" class="form-control" id="article" name="article" value="<?php echo $article;?>" required>
								</div>
								<div class="dropdown_item_title_login">租屋位置</div>
								<div class="mb-3">
                                <input type="text" id="address" class="form-control" name="address" value="<?php echo htmlspecialchars($address); ?>" placeholder="填入地址" required disabled>
								</div>
                                <div class="dropdown_item_title_login">租房心得</div>
								<div class="mb-3">
                                    <textarea class="form-control" id="content" name="content"
                                        style="height: 300px; resize: none;" required><?php echo $content;?></textarea>
                                </div>
                                <div class="dropdown_item_title_login">評分</div>
                                <div class="slider-container">
                                    <input type="range" id="star_rate" name="star_rate" min="0" max="5"
                                        value="<?php echo $star_rate; ?>" step="1" required>
                                    <div class="slider-values" style="color: white;">
                                        <span>0</span>
                                        <span>1</span>
                                        <span>2</span>
                                        <span>3</span>
                                        <span>4</span>
                                        <span>5</span>
                                    </div>
                                </div>
								<style>
									.slider-container {
										position: relative;
										width: auto; /* 根據需要調整寬度 */
									}

									input[type="range"] {
										width: 100%;
									}

									.slider-values {
										display: flex;
										justify-content: space-between;
										margin-top: 5px;
									}

									.slider-values span {
										font-size: 14px; /* 根據需要調整字體大小 */
										position: relative;
									}
									
								</style>
								<br>
								<div class="dropdown_item_title_login">租屋照片</div>
								<div class="mb-3">
									<input type="file" class="form-control" id="house_photo" name="house_photo">
                                    <img src="<?php echo $path; ?>" alt="House Photo"  width="300" height="200">
								</div>
								<br>
							</ul>
						</div>
						<div class="post_button">
							<div class="search_button">
								<input value="送出" type="submit" class="search_submit_button">
							</div>
						</div>
                        <?php
                                }
                            } else {
                                
                            }



                            ?>
					</form>
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