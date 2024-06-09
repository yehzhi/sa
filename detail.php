<!DOCTYPE html>
<html lang="en">

<head>
    <title>輔仁大學租屋修改房屋</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="super_container">
        <div class="home1">
        </div>
        <div class="hello" style="color: #555e81;"></div>
        <header class="header trans_300">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_container d-flex flex-row align-items-center trans_300">
                            <div class="logo_container">
                                <a href="#">
                                    <div class="logo">
                                        <img src="images/logo_fju.jpg" alt="" style="width: 65px; height: 65px;margin-right: 10px;">
                                        <span style="margin-left:1px;margin-top: 0.5px;">輔仁大學租屋網</span>
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
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li class="main_nav_item">';
                                    echo '<a href="info.html" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></a>';
                                    echo '<ul class="dropdown-menu" style="background-color: #a1a8c6;">';
                                    echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.php">修改個人資料</a></li>';
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


        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>詳細資訊</b></h1>
                    </div>

                </div>
            </div>
            <hr>
            <br>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sa";
        $vid = $_GET['vid'];

        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("連接失敗：" . $conn->connect_error);
        }
        $lan_ac=$_SESSION['landlord']['account'];
        $sql = "SELECT * FROM information WHERE vid=$vid";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
	        $id = $row["vid"];
		$lname = $row["l_name"];
                $title = $row["i_title"];
                $address = $row["i_address"];
                $price_min = $row["i_min"];
                $price_max = $row["i_max"];
                $gender = $row["i_gender"];
                $equip = $row["i_equip"];
                $roomstyle = $row["i_roomstyle"];
                $entrance = $row["i_entrance"];
                $deposit=$row["i_deposit"];
                $deposit_amount=$row["i_deposit_amount"];
                $utility=$row["i_utility"];
                $u_amount=$row["u_amount"];
                $u_cal=$row["u_cal"];
                $walktime = $row["i_walktime"];
                $introduce = $row["i_introduce"];
                $i_photo = $row["i_photo"];
                $path = "file/" . $i_photo;
                ?>
             <style>
    .house_item {
        display: flex;
        align-items: center;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }

    .house_text {
        flex: 1;
        padding-right: 20px;
        padding-left: 100px; /* 調整右側內邊距 */
    }

    .house_photo {
        margin-left: 20px; /* 調整左側外邊距 */
        flex-shrink: 0; /* 防止圖片縮小以適應容器 */
    }

    .house_info img {
        max-width: 100%; /* 讓圖片充滿容器 */
        height: auto;
    }
</style>

<div class="container">
    <div class="house_container">
        <!-- 房屋資訊 -->
        <div class="house_item">
            <!-- 文字部分 -->
            <div class="house_text">
                <h2><?php echo $row['i_title']; ?></h2>
                <p>地址: <?php echo $address; ?></p>
                        
                        <p>租金: <?php echo $price_min; ?>-<?php echo $price_max; ?> </p>
                        <p>性別: <?php echo $gender; ?></p>
                        <p>設備: <?php echo $equip; ?></p>
                        <p>押金: <?php echo $deposit_amount; ?></p>
                        <p>水電費: <?php echo $u_amount; ?><?php echo $u_cal; ?></p>
                        <p>出租類型: <?php echo $roomstyle; ?></p>
                        <p>鄰近入口: <?php echo $entrance; ?></p>
                        <p>步行時間: <?php echo $walktime; ?></p>
		        <p>聯絡方式: <?php echo $lname; ?></p>
                <p> <?php echo $row['i_introduce']; ?></p>
            
                
            </div>
            <!-- 圖片部分 -->
            <div class="house_photo">
                <?php 
                     
                     echo "<div class='image_wrapper'>";
                     echo "<img src='$path' alt='' width='600' height='450'>";
                ?>
            </div>
        </div>
    </div>
</div>
</div>
            <?php
        }
    } else {
        echo "沒有找到任何房屋資訊";
    }
    ?>
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
                                <li class="footer_social_item"><a href="#"><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li class="footer_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="footer_social_item"><a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="footer_social_item"><a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                                <li class="footer_social_item"><a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_about">
                            <p>Lorem ipsum dolor sit amet, cons ectetur quis ferme adipiscing elit. Suspen dis
                                se tellus
                                eros, placerat quis ferme ntum et, viverra sit amet lacus. Nam gravida quis
                                ferme semper
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
                                <input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required" data-error="Name is required.">
                                <input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" data-error="Valid email is required.">
                                <textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                                <button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit">send</button>
                            </form>
                        </div>
                    </div>

                    <!-- Footer Contact Info -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_col_title">contact info</div>
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/placeholder.svg" alt="">
                                    </div>
                                </div>
                                <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/phone-call.svg" alt="">
                                    </div>
                                </div>
                                <div class="contact_info_text">2556-808-8613</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                </div>
                                <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div>
                                    <div class="contact_info_icon"><img src="images/planet-earth.svg" alt="">
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
