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
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Home -->
		<div class="home">

			<!-- Home Slider -->
			<div class="home_slider_container">
				<!-- Home Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@aahubs -->
					<div class="home_slider_background" style="background-image:url(images/fju.png)"></div>
					<div class="home_slider_content_container text-center">
						<div class="home_slider_content">
							<h1><b>輔仁大學租屋網</b></h1>
						</div>
					</div>
				</div>

				<!-- Home Slider Nav -->


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

							<nav class="main_nav">
						<ul class="main_nav_list">
							<li class="main_nav_item"><a href="index-te.php">首頁</a></li>
							<li class="main_nav_item">
								<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">討論區</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
									<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
								</div>
							</li>
							<li class="main_nav_item"><a href="discuss.html">我的收藏</a></li>
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

                           

							<!-- Hamburger -->

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

		<!-- Search Box -->

		<div class="search_box">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="search_box_outer">
							<div class="search_box_inner">

								<!-- Search Box Title -->
								<div class="search_box_title text-center">
									<form action="#">
										<div class="newsletter_form_content d-flex flex-row">
											<input class="custom-input" type="text"
												placeholder="關鍵字:路名|街道|房屋名(EX:南京東路五段)">
											<button ype="submit" class="newsletter_submit_btn "
												value="Submit">搜尋</button>
										</div>
									</form>
								</div>


								<!-- Search Arrow -->


								<!-- Search Form -->
								<form class="search_form" action="#">
									<div class="search_box_container">
										<ul class="dropdown_row clearfix">
											<ul class="dropdown_container">
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">房屋租金</div>
													<select name="keywords" id="keywords" class="dropdown_item_select">
														<option>不限</option>
														<option>3000元以下</option>
														<option>3000元-5000元</option>
														<option>5000元-10000元</option>
														<option>10000元-15000元</option>
														<option>15000元-20000元</option>
														<option>20000元以上</option>
													</select>
												</li>
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">出租類型</div>
													<select name="property_ID" id="property_ID"
														class="dropdown_item_select">
														<option>不限</option>
														<option>房間</option>
														<option>套房</option>
														<option>整棟</option>
													</select>
												</li>

												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">鄰近入口</div>
													<select name="property_location" id="property_location"
														class="dropdown_item_select">
														<option>不限</option>
														<option>大門</option>
														<option>514側門</option>
														<option>貴子路門(後門)</option>]
													</select>
												</li>
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">步行時間</div>
													<select name="property_status" id="property_status"
														class="dropdown_item_select">
														<option>不限</option>
														<option>5分鐘內</option>
														<option>5-15分鐘</option>
														<option>15分鐘以上</option>
													</select>
												</li>
											</ul>
										</ul>
									</div>

									<div class="search_box_container">

										</ul>
									</div>

									<div class="search_features_container">
										<div class="search_features_trigger">
											<a href="#">更多條件</a>
										</div>
										<ul class="search_features clearfix">
											<h6 style="color: #FFFFFF;"><b>性別:</b></h6>
											<li class="search_features_item">
												<div>
													<input type="radio" name="gender" id="search_features_2"
														class="search_features_cb">
													<label for="search_features_2">男</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="radio" name="gender" id="search_features_3"
														class="search_features_cb">
													<label for="search_features_3">女</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="radio" name="gender" id="search_features_4"
														class="search_features_cb">
													<label for="search_features_4">不限制</label>
												</div>
											</li>
											<br><br>
											<h6 style="color: #FFFFFF;"><b>租屋設備:</b></h6>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_5"
														class="search_features_cb">
													<label for="search_features_5">電視</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_6"
														class="search_features_cb">
													<label for="search_features_6">冰箱</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_7"
														class="search_features_cb">
													<label for="search_features_7">衛浴</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_8"
														class="search_features_cb">
													<label for="search_features_8">冷氣</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_9"
														class="search_features_cb">
													<label for="search_features_9">洗衣機</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_10"
														class="search_features_cb">
													<label for="search_features_10">飲水機</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_11"
														class="search_features_cb">
													<label for="search_features_11">沙發</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_12"
														class="search_features_cb">
													<label for="search_features_12">衣櫃</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_13"
														class="search_features_cb">
													<label for="search_features_13">單人床</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_14"
														class="search_features_cb">
													<label for="search_features_14">雙人床</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_15"
														class="search_features_cb">
													<label for="search_features_15">書櫃</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_16"
														class="search_features_cb">
													<label for="search_features_16">書桌(椅)</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_17"
														class="search_features_cb">
													<label for="search_features_17">檯燈</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_18"
														class="search_features_cb">
													<label for="search_features_18">寬頻網路</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_19"
														class="search_features_cb">
													<label for="search_features_19">電話</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_20"
														class="search_features_cb">
													<label for="search_features_20">瓦斯</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_21"
														class="search_features_cb">
													<label for="search_features_21">熱水器</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_22"
														class="search_features_cb">
													<label for="search_features_22">可養寵物</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="checkbox" id="search_features_23"
														class="search_features_cb">
													<label for="search_features_23">有對外窗</label>
												</div>
											</li>
										</ul>
									</div>

								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Featured Properties -->

		<div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>最新上架</b></h1>
                    </div>

                </div>
            </div>
            <hr>
      
			<style>
        .flat-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
			margin:50px 80px;
        }
		.flat-container {
			flex:1;
		}
        .flat {
            width: 30%;
            /* border: 1px solid #ccc; */
            padding: 10px;
            margin-bottom: 20px;
        }
		
		.flat-container img{
			position:absolue;
			width:100%;
			height:250px;
			overflow:hidden;
			display:block;
		}
		.flat-container .image_wrapper {
    margin: 10px;
    /* padding: 10px; */
    border: 1px solid #ccc;
    background-color:#eeeff3;
	transition: background-color 0.3s, box-shadow 0.3s; 
}


.flat-container .t_wrapper {
    /* margin: 10px; */
    padding: 30px;
    /* border: 1px solid #ccc; */ 
	color:  #555e81;
}
p{
	font-size: 16px;

}
.flat-container .image_wrapper:hover {
	box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}
.flat-container a {
    text-decoration: none;
    color: inherit;
}
.icon{
	max-width:40px;
	max-height:40px;
}
.equip{
	display: flex;
	flex-wrap:wrap;
	flex-basis: calc(25% - 20px);
	justify-content: flex-start;
	/* text-align: center; */
	/* align-items: center; */
}
.equip> * {
	flex-basis: calc(25% - 20px);
	margin-right: 20px;
	margin-bottom: 5px;
	text-align: center;
}
.e_icon{
	max-width:30px;
	max-height:30px;
	display: inline-block;

}
.e_text {
    font-size: 16px; 
	display: inline-block;
}
.room_tag{
	padding:5px 10px;
	font-size: 16px;
}

 </style>

<div class="flat-container">  
		          
<?php

$servername="127.0.0.1";
    $username="root";
    $password="";
    $dbname="dt_m";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die('連線失敗'.$conn->connect_error);
}

$sql = "SELECT * FROM information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='flat'>";
        
		$i_photo=$row["i_photo"];
		$path="file/" .$i_photo;
		echo "<a href='detail_page.php?id=$i_photo'>";
		echo "<div class='image_wrapper'>";
        echo "<img src='$path' alt=''>";
		$s=$row["i_roomstyle"];
		echo"<div class='featured_panel'> ".$row["i_roomstyle"] ." </div>";
		echo "<div class='t_wrapper'>";
		echo "<h2> " . $row["i_title"] . "</h2>";
        echo "<p>地址: " . $row["i_address"] . "</p>";
		echo "" . $row["i_introduce"] . "</p>";
       
		$e=$row["i_equip"];
		if(!empty($e)){
			echo"<div class='equip'>";
		if (strpos($e, "電視") !== false) {
			echo "<img class='e_icon' img src='images/icon/tv.svg' alt=''> <p class='e_text'>電視</p>";
		}
		if (strpos($e, "冰箱") !== false) {
			echo "<img class='e_icon' img src='images/icon/fridge.svg' alt=''><p class='e_text'>冰箱</p>";
		} 
		if (strpos($e, "衛浴") !== false) {
			echo "<img class='e_icon' img src='images/icon/bathroom.svg' alt=''><p class='e_text'>衛浴</p>";
		} 
		if (strpos($e, "冷氣") !== false) {
			echo "<img class='e_icon' img src='images/icon/air.svg' alt=''><p class='e_text'>冷氣</p>";
		} 
		if (strpos($e, "洗衣機") !== false) {
			echo "<img class='e_icon' img src='images/icon/fridge.svg' alt=''><p class='e_text'>洗衣機</p>";
		} 
		if (strpos($e, "飲水機") !== false) {
			echo "<img class='e_icon' img src='images/icon/drink.svg' alt=''><p class='e_text'>飲水機</p>";
		} 
		if (strpos($e, "沙發") !== false) {
			echo "<img class='e_icon' img src='images/icon/sofa.svg' alt=''><p class='e_text'>沙發</p>";
		} 
		if (strpos($e, "衣櫃") !== false) {
			echo "<img class='e_icon' img src='images/icon/closet.svg' alt=''><p class='e_text'>衣櫃</p>";
		} 
		if (strpos($e, "單人床") !== false) {
			echo "<img class='e_icon' img src='images/icon/1.svg' alt=''><p class='e_text'>單人床</p>";
		} 
		if (strpos($e, "雙人床") !== false) {
			echo "<img class='e_icon' img src='images/icon/2.svg' alt=''><p class='e_text'>雙人床</p>";

		} 
		if (strpos($e, "書櫃") !== false) {
			echo "<img class='e_icon' img src='images/icon/book.svg' alt=''><p class='e_text'>書櫃</p>";
		} 
		if (strpos($e, "書桌(椅)") !== false) {
			echo "<img class='e_icon' img src='images/icon/table.svg' alt=''><p class='e_text'>書桌椅</p>";
		} 
		if (strpos($e, "檯燈") !== false) {
			echo "<img class='e_icon' img src='images/icon/lamp.svg' alt=''><p class='e_text'>檯燈</p>";
		} 
		if (strpos($e, "寬頻網路") !== false) {
			echo "<img class='e_icon' img src='images/icon/internet.svg' alt=''><p class='e_text'>寬頻網路</p>";
		} 
		if (strpos($e, "電話") !== false) {
			echo "<img class='e_icon' img src='images/icon/phone.svg' alt=''><p class='e_text'>電話</p>";
		} 
		if (strpos($e, "瓦斯") !== false) {
			echo "<img class='e_icon' img src='images/icon/fire.svg' alt=''><p class='e_text'>瓦斯</p>";
		} 
		if (strpos($e, "熱水器") !== false) {
			echo "<img class='e_icon' img src='images/icon/heat.svg' alt=''><p class='e_text'>熱水器</p>";
		} 
		if (strpos($e, "可養寵物") !== false) {
			echo "<img class='e_icon' img src='images/icon/wolf.svg' alt=''><p class='e_text'>可養寵物</p>";
		} 
		if (strpos($e, "有對外窗") !== false) {
			echo "<img class='e_icon' img src='images/icon/windows.svg' alt=''><p class='e_text'>有對外窗</p>";
		} 

		echo"</div>";
	}
		else{
			"";
		}
		echo"<div class='room_tags'>";
				echo"<span class='room_tag'>". $row["i_gender"] ."</span>";
				echo"<span class='room_tag'>". $row["i_entrance"] ."</span>";
				echo"<span class='room_tag'>". $row["i_walktime"] ."</span>";
									echo"</div>";
		echo "</div>";
		echo "</div>";
        
		echo "</a>";
		echo"<div class='featured_card_box d-flex flex-row align-items-center trans_300'>";
								echo"<img class='icon' img src='images/icon/m.svg' alt=''>";
								echo"<div class='featured_card_box_content'>";
									echo"<div class='featured_card_price_title'>每月</div>";
									echo"<div class='featured_card_price'>" . $row["i_rent"] ."元</div>";
									echo "</div>";
									echo "</div>";
		echo "</div>";
	}
} else {
    echo "無";
}

$conn->close();
?>
</div>                     
                    
					
                                
		<!-- Cities -->

		<div class="cities">
			<div class="cities_background"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h3>更多租屋資訊</h3>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col">

						<!-- Cities Slider -->

						<div class="cities_slider_container">
							<div class="owl-carousel owl-theme cities_slider">

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_1.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>玫瑰公寓</span></div>
									</a>
								</div>

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_2.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>果汁霸樓上</span></div>
									</a>
								</div>

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_3.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>輔大站一號出口旁</span></div>
									</a>
								</div>

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_4.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>新莊站步行3分鐘</span></div>
									</a>
								</div>

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_5.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>輔大醫院旁</span></div>
									</a>
								</div>

								<!-- City Item -->
								<div class="owl-item city_item">
									<a href="#">
										<div class="city_image">
											<img src="images/city_6.jpg" alt="">
										</div>
										<div class="city_details"><img src="images/search.png" alt=""></div>
										<div class="city_name"><span>三泰路步行1分鐘到校</span></div>
									</a>
								</div>

							</div>

							<div
								class="cities_prev cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
								<img src="images/nav_left.png" alt="">
							</div>

							<div
								class="cities_next cities_nav d-flex flex-row align-items-center justify-content-center trans_200">
								<img src="images/nav_right.png" alt="">
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
										<span>輔仁大學租屋網</span>
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
								<textarea id="contact_form_message" class="text_field contact_form_message"
									name="message" placeholder="Message" required="required"
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

	</div>

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
