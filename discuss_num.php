<!DOCTYPE html>
<html lang="en">

<head>
    <title>有編號討論區</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/listings_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>

<body>
    <div class="super_container">
        <div class="home1">
            <div class="hello" style="color: #555e81;"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
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
                                        <img src="images/logo_fju.jpg" alt="" style="width: 65px; height: 65px;margin-right: 10px;">
                                        <span>輔仁大學租屋網</span>
                                    </div>
                                </a>
                            </div>
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
                                echo '</div>';
                                echo '</li>';
                                echo '<li class="main_nav_item"><a href="collect.php">我的收藏</a></li>';
                                echo '<li class="main_nav_item">';
                                echo '<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                                echo '<i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i>';
                                echo '</a>';
                                echo '<ul class="dropdown-menu" style="background-color: #a1a8c6;">';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>';
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
                                    echo '<a class="dropdown-item" href="my_post_num.php">我的發文</a>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li class="main_nav_item">';
                                    echo '<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></a>';
                                    echo '<ul class="dropdown-menu" style="background-color: #a1a8c6;">';
                                    echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>';
                                    echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>';
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
                                echo '<li class="main_nav_item"><a href="index-te.php">首頁</a></li>';
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
								<?php
									if (isset($_SESSION['tenant']['account'])) {
									echo '<button class="fixed-button">';
									echo '<a href="post_numpage.php"><b><h2>+</h2></b></a>';
									echo '</button>';
									}
									else{
									}
									?>
                                    <form class="search_form" action="#">
                                        <div class="search_box_container">
                                            <ul class="dropdown_row clearfix">

                                                <br>
                                                <div class="dropdown_item_title">編號</div>
                                                <input name="title" type="text" placeholder="ex:145">

                                                <div class="dropdown_item_title">標題</div>
                                                <input name="title" type="text" placeholder="ex:玫瑰公寓">

                                                <div class="dropdown_item_title">日期</div>
                                                <input type="date" id="post_date" name="post_date" value="2024-04-16" min="2018-01-1" max="2050-12-31" />


                                                <div class="dropdown_item_title">評分</div>
											<div class="slider-container">
												<input type="range" id="star_rate" name="star_rate" min="0" max="5" value="1" step="1" required>
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
													width: 200px; /* 根據需要調整寬度 */
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
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $dbname = "sa";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM numbered_post WHERE status='approved'"; 

                        $result = $conn->query($sql);
                        

                        if ($result->num_rows > 0) {
                            
                            
                            while ($row = $result->fetch_assoc()) {
                                $post_id = $row["post_id"];
                                $verify_id = $row["verify_id"];
                                $article = $row["article"];
                                $post_date = $row["post_date"];
                                $star_rate= $row["star_rate"];
                                $lastname = $row["lastname"];
                                $gender = $row["gender"];

                                //設置性別
                                if ($gender === "f") {
                                    $prefix = "小姐";
                                } elseif ($gender === "m") {
                                    $prefix = "先生";
                                } else {
                                    $prefix = "";
                                }

                                // 
                                echo '<div class="listing_item">';
                                echo '<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">';
                                echo '<div class="listing_content">';
                                echo '<div class="listing_title"><a href="post_num_all.php?post_id=' . $post_id . '">' . $article . '</a></div>';
                                echo '<div class="listing_text">房屋編號: ' . $verify_id . '<br>評分:' . $star_rate . '分<br>日期: ' . $post_date . '<br>發文者: ' . $lastname . $prefix . '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            
                            
                        } else {
                            echo "";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/listings_custom.js"></script>
</body>

</html>
