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


		<div class="search_box">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="search_box_outer">
							<div class="search_box_inner">
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


								<form class="search_form" action="#">
									<div class="search_box_container">
										<ul class="dropdown_row clearfix">
											<ul class="dropdown_container">
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">房屋租金</div>
													<select name="krent" id="krent" class="dropdown_item_select">
														<option value = "租金無限制">不限</option>
														<option value = "3000元以下">3000元以下</option>
														<option value = "3000元-5000元">3000元-5000元</option>
														<option value = "5000元-10000元">5000元-10000元</option>
														<option value = "10000元-15000元">10000元-15000元</option>
														<option value = "15000元-20000元">15000元-20000元</option>
														<option value = "20000元以上">20000元以上</option>
													</select>
												</li>
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">出租類型</div>
													<select name="kroomstyle" id="kroomstyle"
														class="dropdown_item_select">
														<option value = "出租無限制">不限</option>
														<option value = "房間">房間</option>
														<option value = "套房">套房</option>
														<option value = "整棟">整棟</option>
													</select>
												</li>

												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">鄰近入口</div>
													<select name="kentrance" id="kentrance"
														class="dropdown_item_select">
														<option value = "入口無限制">不限</option>
														<option value = "大門">大門</option>
														<option value = "514側門">514側門</option>
														<option value = "貴子路門(後門)">貴子路門(後門)</option>]
													</select>
												</li>
												<li class="dropdown_item dropdown_item_5">
													<div class="dropdown_item_title">步行時間</div>
													<select name="kwalktime" id="kwalktime"
														class="dropdown_item_select">
														<option value = "步行無限制">不限</option>
														<option value = "5分鐘內">5分鐘內</option>
														<option value = "5-15分鐘">5-15分鐘</option>
														<option value = "15分鐘以上">15分鐘以上</option>
													</select>
												</li>
											</ul>
										</ul>
									</div>

									<div class="search_box_container"></div>
									<div class="search_features_container">
										<div class="search_features_trigger">
											<a href="#">更多條件</a>
										</div>
										<ul class="search_features clearfix">
											<h6 style="color: #FFFFFF;"><b>性別:</b></h6>
											<li class="search_features_item">
												<div>
													<input type="radio" name="kgender" id="search_features_2"
														class="search_features_cb" value = "man">
													<label for="search_features_2">男</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="radio" name="kgender" id="search_features_3"
														class="search_features_cb" value = "woman">
													<label for="search_features_3">女</label>
												</div>
											</li>
											<li class="search_features_item">
												<div>
													<input type="radio" name="kgender" id="search_features_4"
														class="search_features_cb" value = "nol">
													<label for="search_features_4">不限制</label>
												</div>
											</li>
											<br><br>
											<h6 style="color: #FFFFFF;"><b>租屋設備:</b></h6>
											<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "電視">
															<label for="search_features_5">電視</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "冰箱" >
															<label for="search_features_6">冰箱</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "衛浴" >
															<label for="search_features_7">衛浴</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "冷氣" >
															<label for="search_features_8">冷氣</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "洗衣機">
															<label for="search_features_9">洗衣機</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "飲水機">
															<label for="search_features_10">飲水機</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "沙發">
															<label for="search_features_11">沙發</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "衣櫃">
															<label for="search_features_12">衣櫃</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "單人床" >
															<label for="search_features_13">單人床</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "雙人床">
															<label for="search_features_14">雙人床</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "書櫃" >
															<label for="search_features_15">書櫃</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "書桌(椅)"  >
															<label for="search_features_16">書桌(椅)</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "檯燈"  >
															<label for="search_features_17">檯燈</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "寬頻網路">
															<label for="search_features_18">寬頻網路</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "電話">
															<label for="search_features_19">電話</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "瓦斯" >
															<label for="search_features_20">瓦斯</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "熱水器">
															<label for="search_features_21">熱水器</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "可養寵物">
															<label for="search_features_22">可養寵物</label>
														</div>
													</li>
													<li class="search_features_item">
														<div>
															<input type="checkbox" name = "eq[]" value = "有對外窗" >
															<label for="search_features_23">有對外窗</label>
														</div>
													</li>
										        </ul>
									        </div>
                                        </form>
							        </div>
						        </div>
					        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="search_box_inner listings_col">
        <?php
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = ""; 
            $dbname = "sa";
            $conn = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM information";

            if ($conn->connect_error) {
                die("連接失敗: " . $conn->connect_error);
            }
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $_SESSION['results'] = [];
                while($row = $result->fetch_assoc()) {
                    $_SESSION['results'][] = $row;
                }
            } else {
                echo "没有找到匹配的结果";
            }
            $conn->close();
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


