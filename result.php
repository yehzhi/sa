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
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<div class="super_container">
		<div class="home">
			<div class="home_slider_container">
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/fju.png)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1><b>輔仁大學租屋網</b></h1>
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
										<span style="margin-left:1px;margin-top: 0.5px;">輔仁大學租屋網</span>
									</div>
								</a>
							</div>

							<nav class="main_nav">
						<ul class="main_nav_list">
							<li class="main_nav_item"><a href="index-te.php">首頁</a></li>
							<li class="main_nav_item">
								<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>
								<div class="dropdown-menu" style="background-color: #a1a8c6;">
									<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
									<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
								</div>
							</li>
							<li class="main_nav_item"><a href="collect.php">我的收藏</a></li>
							<li class="main_nav_item">
                                        <a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a>
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
        
        <button class="back-button" onclick="history.back()">返回</button>

    <div class="search_box_inner listings_col">
        <?php
            if (isset($_SESSION['results']) && count($_SESSION['results']) > 0) {
                $results = $_SESSION['results'];
                foreach ($results as $row) {
                    echo '<div class="listing_item">';
                    echo '<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">';
                    echo '<div class="listing_content">';
                    echo '<div class="listing_title"><a href="result_detail.php?post_id=' . $i_id . '">' . $i_title . '</a></div>';
                    echo '<div class="listing_text">地址: ' . $i_address . '<br>性別:' . $i_gender . '元<br>租金:' . $i_rent . '元<br>出租類型: ' . $i_roomstyle . '<br>鄰近入口: ' . $i_entrance . '<br>步行時間: '.$i_walktime.'</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                unset($_SESSION['results']);
            } else {
                echo "没有找到匹配的结果";
            }
        ?>
    </div>

    <div>
        <footer class="footer">
            <div class="container">
            </div>
        </footer>

    </div>

    <script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>


