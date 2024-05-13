<!DOCTYPE html>
<html lang="en">

<head>
	<title>無編號討論區</title>
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
	<div class="super_container"></div>
	<div class="home1">
		<div class="hello" style="color: #555e81;"></div>
	</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
					</div>
				</div>
			</div>
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
									<span>輔仁大學租屋網</span>
								</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index-te.html">首頁</a></li>
								<li class="main_nav_item">
									<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">討論區</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="discuss_num.html">有編號房屋</a>
										<a class="dropdown-item" href="discuss_nonum.html">無編號房屋</a>
									</div>
								</li>								<li class="main_nav_item"><a href="discuss.html">我的收藏</a></li>
								<li class="main_nav_item"><a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a>
								<ul class="dropdown-menu" style="background-color: #a1a8c6;">
										<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>
										<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>
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
	<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "sa";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM post"; 

    $result = $conn->query($sql);
                    
                    

    if ($result->num_rows > 0) {
                        
                        
        while ($row = $result->fetch_assoc()) {
            $article = $row["article"];
            $star_rate = $row["star_rate"];
            $post_date = $row["post_date"];
            $gender = $row["gender"];
			$lastname = $row["lastname"];
			// 設定性別稱呼
            if ($gender === "f") {
                $prefix = "小姐";
            } elseif ($gender === "m") {
                $prefix = "先生";
            } else {
                $prefix = "";
            }
                            
        }
                        
                        
                        
    } else {
        echo "";
    }
                    
                    
    ?>

	<div class="listings">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-4 sidebar_col">
					<div class="search_box">
						<div class="search_box_content">
							<div class="search_box_title text-center">
								<form action="#">
									<div class="newsletter_form_content d-flex flex-row">
										<input class="custom-input" type="text" placeholder=" 文章關鍵字">
										<button ype="submit" class="newsletter_submit_btn" value="Submit">搜尋</button>
									</div>
								</form>
							</div>
							<div class="fixed-button-container">
								<button class="fixed-button">
									<a href="post_nonum.html"><b><h2>+</h2></b></a>
								</button>
								<form class="search_form" action="#">
									<div class="search_box_container">
										<ul class="dropdown_row clearfix">
											<br>
											<div class="dropdown_item_title">標題</div>
											<input name="title" type="text" placeholder="ex:玫瑰公寓">
											<div class="dropdown_item_title">日期</div>
											<input type="date" id="post_date" name="post_date" value="2024-04-16"
												min="2018-01-1" max="2050-12-31" />
											<div class="dropdown_item_title">評分</div>
											<input type="range" id="star" name="star" min="0" max="5" value="1"
												step="1" />
											<div class="dropdown_item_title">地址</div>
											<input name="title" type="text" placeholder="ex:南京東路五段">
										</ul>
									</div>
									<div class="search_features_container">
										<div class="search_button">
											<input value="搜尋" type="submit" class="search_submit_button">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-8 listings_col">
					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html"><?php echo $article; ?></a></div>
								<div class="listing_text">評分:<?php echo $star_rate; ?>分<br>日期: <?php echo $post_date; ?><br>發文者: <?php echo $lastname . $prefix; ?></div>
								
							</div>
						</div>
					</div>

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">拜託大家避雷這間!</a></div>
								<div class="listing_text">評分:5分<br>日期 : 2024/4/10 <br> 發文者 : 李小姐</div>
								
							</div>
						</div>
					</div>

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">!!!大學年租過最超值</a></div>
								<div class="listing_text">評分:5分<br>日期 : 2024/4/10 <br> 發文者 : 張先生</div>
								
							</div>
						</div>

					</div>

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">避雷!!蟑螂失控</a></div>
								<div class="listing_text">評分:5分<br>日期 : 2024/4/10 <br> 發文者 : 賴先生</div>
								
							</div>
						</div>
					</div>

					<div class="listing_item">
						<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
							<div class="listing_content">
								<div class="listing_title"><a href="listings_single.html">輔大工商城心得</a></div>
								<div class="listing_text">評分:5分<br>日期 : 2024/4/10 <br> 發文者 : 葉小姐</div>

								
							</div>
						</div>
					</div>
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