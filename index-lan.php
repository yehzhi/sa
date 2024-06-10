<!DOCTYPE html>
<html>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php
        session_start();

        if (!isset($_SESSION['landlord'])) {
            header("Location: login.html");
            exit;
        }
        ?>

<div class="super_container">

<!-- Home -->
<div class="home1">



</div>

<!-- Home Slider Nav -->


<div class="hello" style="color: #555e81;"></div>
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
                                <img src="images/logo_fju.jpg" alt="" style="width: 65px; height: 65px;margin-right: 10px;">
                                <span style="margin-left:1px;margin-top: 0.5px;">輔仁大學租屋網</span>
                            </div>
                        </a>
                    </div>

                    <!-- Main Navigation -->

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





                </div>
            </div>
        </div>
    </div>



</header>



<!-- Featured Properties -->

<div class="featured">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>我的房屋</b></h1>
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


        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("連接失敗：" . $conn->connect_error);
        }
        $lan_ac=$_SESSION['landlord']['account'];
        $sql = "SELECT * FROM information WHERE l_name='$lan_ac'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
		        $id = $row["vid"];
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
                <h2><?php echo $title; ?></h2>
                <p>地址: <?php echo $address; ?></p>
                        <p>房屋編號: <?php echo $id; ?></p>
                        <p>租金: <?php echo $price_min; ?>-<?php echo $price_max; ?> </p>
                        <p>性別: <?php echo $gender; ?></p>
                        <p>出租類型: <?php echo $roomstyle; ?></p>
                        <p>設備: <?php echo $equip; ?></p>
                        <p>押金: <?php echo $deposit_amount; ?></p>
                        <p>水電費: <?php echo $u_amount; ?><?php echo $u_cal; ?></p>
                        <div class="room_tags">
                            <span class='room_tag'><?php echo $roomstyle; ?></span>
                            <span class='room_tag'><?php echo $entrance; ?></span>
                            <span class='room_tag'><?php echo $walktime; ?></span>
                        </div>
                <p> <?php echo $row['i_introduce']; ?></p>
            
                <a class="btn btn-custom" href="fix.php?vid=<?php echo $id; ?>" role="button" style="margin-top: 10px;">修改房屋</a>
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