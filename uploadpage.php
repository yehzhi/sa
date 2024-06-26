<!DOCTYPE html>
<html lang="en">

<head>
	<title>輔仁大學租屋上架房屋</title>
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
		<div class="home1"></div>



		<div class="hello" style="color: #555e81;"></div>
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
									<li class="main_nav_item"><a href="index-lan.php">我的房屋</a></li>
									<li class="main_nav_item">
										<a href="" class="dropdown-toggle" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false">新增房屋</a>
										<div class="dropdown-menu" style="background-color: #a1a8c6;">
											<a class="dropdown-item" href="verifyhouse.html">驗證房屋</a>
											<a class="dropdown-item" href="uploadpage.php">上架房屋</a>
										</div>
									</li>
									<li class="main_nav_item">
										<a href="discuss.html" class="dropdown-toggle" data-toggle="dropdown"
											aria-haspopup="true" aria-expanded="false">討論區</a>
										<div class="dropdown-menu" style="background-color: #a1a8c6;">
											<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
											<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
										</div>
									</li>
									<li class="main_nav_item">
										<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a>
										<ul class="dropdown-menu" style="background-color: #a1a8c6;">
											<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.php">修改個人資料</a></li>
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




		<div class="featured">
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>上架房屋</b></h1>
					</div>

				</div>
			</div>
			<?php
				session_start();

				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "sa";

				// 建立資料庫連線
				$conn = new mysqli($servername, $username, $password, $dbname);

				// 檢查連線是否成功
				if ($conn->connect_error) {
					die("連接失敗: " . $conn->connect_error);
				}

				$account = $_SESSION['landlord']['account'];
				// 查詢已經上架的房屋ID
				$used_vid_query = "SELECT vid FROM information WHERE l_name='$account'";
				$used_vid_result = $conn->query($used_vid_query);

				$used_vids = array();
				if ($used_vid_result->num_rows > 0) {
					while ($row = $used_vid_result->fetch_assoc()) {
						$used_vids[] = $row["vid"];
					}
				}

				// 查詢當前房東未上架的已驗證房屋ID
				if (count($used_vids) > 0) {
					$vid_query = "SELECT vid FROM verify WHERE account='$account' AND status='approved' AND vid NOT IN ('" . implode("','", $used_vids) . "')";
				} else {
					$vid_query = "SELECT vid FROM verify WHERE account='$account' AND status='approved'";
				}
				$vid_result = $conn->query($vid_query);

				


				$conn->close();
			?>
			<hr>
			<div class="listings">
    <div class="container" style="margin-top:-100px;">
        <div class="row">
            <div class="col-lg-6 sidebar_col">
                <div class="search_box1">
                    <form class="search_form" action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="search_box_content1" style="height: auto;">
                                <div class="search_box_container1">
                                    <ul class="dropdown_row clearfix" style="margin-left: -25px;">
                                        <br>
                                        <li class="dropdown_item">
                                            <div class="dropdown_item_title1">標題</div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="title"
                                                    placeholder="例如:鄰近的捷運站、房屋特色、幾房幾廳、幾人居住、房屋類型" required>
                                            </div>
                                        </li>
                                        <?php if ($vid_result->num_rows > 0): ?>
											<li class="dropdown_item">
												<div class="dropdown_item_title1">選擇房屋</div>
												<div class="mb-3">
												<?php $isSingleOption = $vid_result->num_rows === 1; ?>
												<select name="vid" id="vid" class="dropdown_item_select1 <?php echo $isSingleOption ? 'single-option' : ''; ?>" onchange="getAddress(this.value)">
													<?php while ($row = $vid_result->fetch_assoc()): ?>
														<option value="<?php echo $row["vid"]; ?>"><?php echo $row["vid"]; ?></option>
													<?php endwhile; ?>
													</select>
												</div>
											</li>
										<?php else: ?>
											<!-- 如果沒有可用的房屋，顯示空的下拉選單 -->
											<li class="dropdown_item">
												<div class="dropdown_item_title1">選擇房屋</div>
												<div class="mb-3">
													<select name="vid" class="dropdown_item_select1" onchange="getAddress(this.value)" required> 
														<option value="" disabled selected>沒有可用的房屋</option>
													</select>
												</div>
											</li>
										<?php endif; ?>
										
										<li class="dropdown_item">
											<div class="dropdown_item_title1">地址</div>
											<div class="mb-3">
												<input type="text" id="address" class="form-control" name="address" value="<?php echo htmlspecialchars($address); ?>" placeholder="填入地址" required>
											</div>
										</li>
										<script>
											// JavaScript 函數，當下拉選單變更時觸發
											function getAddress(selectedValue) {
												// 執行 AJAX 請求到後端 PHP 檔案
												var xhr = new XMLHttpRequest();
												xhr.onreadystatechange = function() {
													if (this.readyState == 4 && this.status == 200) {
														// 如果請求成功，更新地址欄位的值
														document.getElementById("address").value = this.responseText;
													}
												};
												xhr.open("POST", "get_address.php", true);
												xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
												xhr.send("vid=" + selectedValue);
											}
											document.addEventListener('DOMContentLoaded', function () {
											var selectElement = document.getElementById('vid');
											if (selectElement && selectElement.classList.contains('single-option')) {
												selectElement.addEventListener('click', function () {
													getAddress(this.value);
												});
											}
										});

										</script>
													<li class="dropdown_item">
														<div class="dropdown_item_title1">上傳房屋圖片</div>
														<div class="mb-3">

															<input class="form-control" type="file" name="fileToUpload"
																id="fileToUpload">

														</div>
													</li>
													<li class="dropdown_item">
														<div class="dropdown_item_title1">租金區間：</div>
														<div class="mb-3">
									
													<input type="number" class="form-control" id="price-min" name="price_min" placeholder="最低" required step="100">
													<div class="dropdown_item_title1">~</div>
													<input type="number" class="form-control" id="price-max" name="price_max" placeholder="最高" required step="100">
											
														</div>
													</li>
													
														<h6 style="color: #FFFFFF;margin-left: 30px;">性別:</h6>
														<select name="gender"style="margin-left: 30px;">
															<option value="男">男</option>
															<option value="女">女</option>
															<option value="不限制">不限制</option>
														</select>
														<br><br>
														<div style="margin-left: 30px;" >
														<h6 style="color: #FFFFFF;">租屋設備:</h6>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="電視">
																<label for="search_features_5">電視</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="冰箱">
																<label for="search_features_6">冰箱</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="衛浴">
																<label for="search_features_7">衛浴</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="冷氣">
																<label for="search_features_8">冷氣</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="洗衣機">
																<label for="search_features_9">洗衣機</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="飲水機">
																<label for="search_features_10">飲水機</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="沙發">
																<label for="search_features_11">沙發</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="衣櫃">
																<label for="search_features_12">衣櫃</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="單人床">
																<label for="search_features_13">單人床</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="雙人床">
																<label for="search_features_14">雙人床</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="書櫃">
																<label for="search_features_15">書櫃</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="書桌(椅)">
																<label for="search_features_16">書桌(椅)</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="檯燈">
																<label for="search_features_17">檯燈</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="寬頻網路">
																<label for="search_features_18">寬頻網路</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="電話">
																<label for="search_features_19">電話</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="瓦斯">
																<label for="search_features_20">瓦斯</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="熱水器">
																<label for="search_features_21">熱水器</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="可養寵物">
																<label for="search_features_22">可養寵物</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="有對外窗">
																<label for="search_features_23">有對外窗</label>
															</div>
														</li>
														<li class="search_features_item">
															<div>
																<input type="checkbox" name="eq[]" value="ele">
																<label for="search_features_23">電梯</label>
															</div>
														</li>
													</div>	
													

													<div class="drop" style="margin-top: -200px;margin-left: 30px;">
														<li class="search_features_item"  style="width: 300px;">
															<h6 style="color: #FFFFFF;">鄰近入口:</h6>
															<div>
															<input type="checkbox" name="entrance[]" value="大門">
															<label for="search_features_23">大門     </label></div>
															<div>
															<input type="checkbox" name="entrance[]" value="514側門">
															<label for="search_features_23">514側門   </label></div>
															<div>
															<input type="checkbox" name="entrance[]" value="貴子路後門">
															<label for="search_features_23">貴子路後門</label></div>
															<div>
															<input type="checkbox" name="entrance[]" value="捷運輔大站">
															<label for="search_features_23">捷運輔大站</label></div>
															<div>
																<input type="checkbox" name="entrance[]" value="捷運新莊站">
																<label for="search_features_23">捷運新莊站</label></div>
																<div>
																	<div>
																		<input type="checkbox" name="entrance[]" value="捷運丹鳳站">
																		<label for="search_features_23">捷運丹鳳站</label></div>
																	<input type="checkbox" name="entrance[]" value="捷運迴龍站">
																	<label for="search_features_23">捷運迴龍站</label></div>
																	<div>
																		<input type="checkbox" name="entrance[]" value="捷運新埔站">
																		<label for="search_features_23">捷運新埔站</label></div>
														</li>
														
											<li class="dropdown_item dropdown_item_5" style="width: 100px;margin-left: 30px;">
															<div class="dropdown_item_title">步行時間</div>
															<select name="walktime" id="property_status"
																class="dropdown_item_select"  required>
																
																<option value="5分鐘內">5分鐘內</option>
																<option value="5-15分鐘">5-15分鐘</option>
																<option value="15分鐘以上">15分鐘以上</option>
															</select>
														</li>
														<li class="dropdown_item dropdown_item_5" style="width: 100px; margin-left: 30px;">
															<div class="dropdown_item_title">出租類型</div>
															<select name="roomstyle" id="property_ID"
																class="dropdown_item_select" required>
																<option value="不限">不限</option>
																<option value="雅房">雅房</option>
																<option value="套房">套房</option>
																<option value="家庭式">家庭式</option>
															</select>
														</li>
														
														
													</div>
													<div class="yo" style="margin-left: -5px;">
														<li class="dropdown_item">
															<br>
													
															<div class="mb-3" style="margin-left: 30px;">
																<label style="color: #FFFFFF;">需要押金：</label>
																<input type="radio" id="deposit_yes" name="deposit" value="yes" onclick="showDepositAmount()" > <label for="deposit_yes" style="color: #FFFFFF;">是</label>
																<input type="radio" id="deposit_no" name="deposit" value="no" onclick="hideDepositAmount()"> <label for="deposit_no" style="color: #FFFFFF;">否</label>
																<br><br>
																<div id="depositAmountInput" style="display: none;">
																	<label for="deposit_amount" style="color: #FFFFFF;">押金金額：</label>
																	<input type="text" id="deposit_amount" name="deposit_amount">
																	<br><br>
																</div>
																<label style="color: #FFFFFF;">需要水電費：</label>
																<input type="radio" id="utility_yes" name="utility" value="yes" onclick="showUtilityInput()"> <label for="utility_yes" style="color: #FFFFFF;">是</label>
																<input type="radio" id="utility_no" name="utility" value="no" onclick="hideUtilityInput()"> <label for="utility_no" style="color: #FFFFFF;">否</label>
																<br><br>
																<div id="utilityInput" style="display: none;">
																	<label for="utility_amount" style="color: #FFFFFF;">水電費金額：</label>
																	<input type="text" id="utility_amount" name="u_amount">
																	<br><br>
																	<label for="utility_calculation" style="color: #FFFFFF;">計算方式：</label>
																	<select id="utility_calculation" name="u_cal">
																		<option value="按月計算">按月計算</option>
																		<option value="按度數計算">按度數計算</option>
																		<option value="固定金額">固定金額</option>
																	</select>
																	<br><br>
																</div>
															</div>
														</li>
													</div>
													
													<div class="yo" style="margin-left: -5px;">
														<li class="dropdown_item">
															<br>
															<div class="dropdown_item_title1">詳細介紹</div>
															<div class="mb-3">
																<input type="text" class="form-control1"
																	name="introduce" id="exampleFormControlInput1"
																	placeholder="可以輸入更多詳細房屋資料">
															</div>
														</li>
													</div>
												</ul>
												<div class="search_features_container">
													<div class="search_button">
														<input value="上架房屋" type="submit" class="search_submit_button1"
															style="margin-left: 150px;">
													</div>
												</div>
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
		<!-- 押金動動 -->
		<script>
			function showDepositAmount() {
				var depositAmountInput = document.getElementById("depositAmountInput");
				depositAmountInput.style.display = "block";
			}
		
			function hideDepositAmount() {
				var depositAmountInput = document.getElementById("depositAmountInput");
				depositAmountInput.style.display = "none";
			}
		
			function showUtilityInput() {
				var utilityInput = document.getElementById("utilityInput");
				utilityInput.style.display = "block";
			}
		
			function hideUtilityInput() {
				var utilityInput = document.getElementById("utilityInput");
				utilityInput.style.display = "none";
			}
		</script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
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
