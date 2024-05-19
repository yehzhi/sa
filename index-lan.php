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
                                    <li class="main_nav_item"><a href="index-lan.html">我的房屋</a></li>
                                    <li class="main_nav_item">
                                        <div class="dropdown">
                                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                新增房屋
                                            </a>

                                            <ul class="dropdown-menu" style="background-color: #a1a8c6;">
                                                <li style="background-color: #a1a8c6;"><a class="dropdown-item" href="verifyhouse.html">驗證房屋</a></li>
                                                <li style="background-color: #a1a8c6;"><a class="dropdown-item" href="upload.html">上架房屋</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="main_nav_item"><a href="about.html">討論區</a></li>
                                    <li class="main_nav_item"><a href="discuss.html"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a></li>
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
            <div class="container">



                <br>
                <div class="home2" style="width: 1000px; margin: 0 auto; ">

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "19990817";
                    $dbname = "sa";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    $sql = "SELECT * FROM information"; 

                    $result = $conn->query($sql);
                    
                    

                    if ($result->num_rows > 0) {
                        
                        
                        while ($row = $result->fetch_assoc()) {
                            $id = $row["vid"];
                            $title = $row["i_title"];
                            $address = $row["i_address"];
                            $rent = $row["i_rent"];
                            $gender = $row["i_gender"];
                            $equip= $row["i_equip"];
                            $roomstyle = $row["roomstyle"];
                            $entrance = $row["i_entrance"];
                            $walktime = $row["i_walktime"];
                            $introduce = $row["i_introduce"];
                            ?>
                            <div class="row">
                            <div class="listing_item" style="margin-top: 30px;">
                            <div class="listing_item_inner d-flex flex-md-row flex-column trans_300">
                            <div class="listing_content">
                            <div class="listing_title1"><?php echo $title; ?></div>
                            <div class="listing_text"><?php echo "房屋編號:00",$id; ?></div>
                            <div class="room_tags">
                                    <?php 
                                    if (strpos($equip, '電視') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">電視</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '冰箱') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">冰箱</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '衛浴') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">獨立衛浴</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '冷氣') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">冷氣</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '洗衣機') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">洗衣機</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '飲水機') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">飲水機</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '沙發') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">沙發</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '衣櫃') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">衣櫃</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '單人床') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">單人床</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '雙人床') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">雙人床</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '書櫃') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">書櫃</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '書桌(椅)') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">書桌(椅)</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '檯燈') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">檯燈</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '寬頻網路') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">寬頻網路</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '電話') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">電話</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '瓦斯') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">瓦斯</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '熱水器') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">熱水器</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '可養寵物') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">可養寵物</a></span>
                                        <?php
                                    }
                                    else {}

                                    if (strpos($equip, '有對外窗') !== false) {
                                        ?>
                                        <span class="room_tag"><a href="#">有對外窗</a></span>
                                        <?php
                                    }
                                    else {}

                                    
                                    
                                    ?>
                                    
                                        
                                    </div>
                                </div>
                                <div>
                                <?php echo " <a href='fix.php?vid=".$row["vid"]."'>修改資料</a><br>"; ?>
                                </div>
                            </div>
                            </div>
                            </div>
                            
                            <?php 
                            
                        }
                        
                        
                        
                    } else {
                    }
                    
                    
                    ?>


                    
                            


        
</body>

</html>
