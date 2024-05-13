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
                                        <div class="dropdown">
                                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                新增房屋
                                            </a>

                                            <ul class="dropdown-menu" style="background-color: #a1a8c6;">
                                                <li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">驗證房屋</a></li>
                                                <li style="background-color: #a1a8c6;"><a class="dropdown-item" href="upload.html">上架房屋</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="main_nav_item"><a href="about.html">討論區</a></li>
                                    <li class="main_nav_item"><a href="discuss.html"><i class="fa-solid fa-circle-user fa-2xl" style="color: #f9e46c;"></i></i></a></li>
                                </ul>
                            </nav>



                            <!-- Phone Home -->



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



        <!-- Featured Properties -->

        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>修改房屋資訊</b></h1>
                    </div>

                </div>
            </div>
            <hr>

            <div class="listings">
                <div class="container" style="margin-top:-100px;">
                    <div class="row">
                    <form action = "fixdata.php" method = "post">

                        <!-- Search Sidebar -->

                        <div class="col-lg-6 sidebar_col">

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
                                    $equip = $row["i_equip"];
                                    $roomstyle = $row["roomstyle"];
                                    $entrance = $row["i_entrance"];
                                    $walktime = $row["i_walktime"];
                                    $introduce = $row["i_introduce"];
                                }
                            } else {
                                echo "";
                            }


                            ?>

                            <!-- Search Box -->

                            <div class="search_box1">
                                <div class="up3" style="display: flex;margin-left: 320px;">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="out" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">已出租</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="stay" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">出租中</label>
                                    </div>
                                </div>
                                <div class="search_box_content1" style="height: auto;">
                                    <!-- Search Form -->
                                    <form class="search_form" action="#">
                                        <div class="search_box_container1">
                                            <ul class="dropdown_row clearfix" style="margin-left: -25px;">
                                                <br>
                                                <li class="dropdown_item">
                                                    <div class="dropdown_item_title1">房屋編號</div>
                                                    <div class="mb-3">
                                                        <input type="text" disabled="false" class="form-control" name = "fid" value = <?php echo $id; ?>>
                                                    </div>
                                                </li>
                                                <li class="dropdown_item">
                                                    <div class="dropdown_item_title1">標題</div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="fixtitle" value=<?php echo $title; ?>>
                                                    </div>
                                                </li>
                                                <li class="dropdown_item">
                                                    <div class="dropdown_item_title1">房屋地址</div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="fixaddress" value=<?php echo $address; ?>>
                                                    </div>
                                                </li>
                                                <li class="dropdown_item">
                                                    <div class="dropdown_item_title1">上傳房屋圖片</div>
                                                    <div class="mb-3">
                                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                                    </div>
                                                </li>
                                                <li class="dropdown_item">
                                                    <div class="dropdown_item_title1">租金</div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="fixrent" value=<?php echo $rent; ?>>
                                                    </div>
                                                </li>

                                                <div class="up2" style="margin-left: 30px;">
                                                    <h6 style="color: #FFFFFF;">性別:</h6>
                                                    <?php
                                                    if (strpos($gender, 'man') !== false) {
                                                    ?>
                                                        <select name="fixgender">
                                                            <option value="man" selected>男</option>
                                                            <option value="woman">女</option>
                                                            <option value="nol">不限制</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($gender, 'woman') !== false) {
                                                    ?>
                                                        <select name="fixgender">
                                                            <option value="man">男</option>
                                                            <option value="woman" selected>女</option>
                                                            <option value="nol">不限制</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($gender, 'nol') !== false) {
                                                    ?>
                                                        <select name="fixgender">
                                                            <option value="man">男</option>
                                                            <option value="woman">女</option>
                                                            <option value="nol" selected>不限制</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }
                                                    ?>
                                                    <br><br>
                                                    <h6 style="color: #FFFFFF;">租屋設備:</h6>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '電視') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="電視" checked>
                                                                <label for="search_features_5">電視</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="電視">
                                                                <label for="search_features_5">電視</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>


                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '冰箱') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="冰箱" checked>
                                                                <label for="search_features_6">冰箱</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="冰箱">
                                                                <label for="search_features_6">冰箱</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '衛浴') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="衛浴" checked>
                                                                <label for="search_features_7">衛浴</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="衛浴">
                                                                <label for="search_features_7">衛浴</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '冷氣') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="冷氣" checked>
                                                                <label for="search_features_8">冷氣</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="冷氣">
                                                                <label for="search_features_8">冷氣</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '洗衣機') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="洗衣機" checked>
                                                                <label for="search_features_9">洗衣機</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="洗衣機">
                                                                <label for="search_features_9">洗衣機</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '飲水機') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="飲水機" checked>
                                                                <label for="search_features_10">飲水機</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="飲水機">
                                                                <label for="search_features_10">飲水機</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '沙發') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="沙發" checked>
                                                                <label for="search_features_11">沙發</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="沙發">
                                                                <label for="search_features_11">沙發</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '衣櫃') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="衣櫃" checked>
                                                                <label for="search_features_12">衣櫃</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="衣櫃">
                                                                <label for="search_features_12">衣櫃</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '單人床') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="單人床" checked>
                                                                <label for="search_features_13">單人床</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="單人床">
                                                                <label for="search_features_13">單人床</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '雙人床') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="雙人床" checked>
                                                                <label for="search_features_14">雙人床</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="雙人床">
                                                                <label for="search_features_14">雙人床</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '書櫃') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="書櫃" checked>
                                                                <label for="search_features_15">書櫃</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="書櫃">
                                                                <label for="search_features_15">書櫃</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '書桌(椅)') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="書桌(椅)" checked>
                                                                <label for="search_features_16">書桌(椅)</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="書桌(椅)">
                                                                <label for="search_features_16">書桌(椅)</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '檯燈') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="檯燈" checked>
                                                                <label for="search_features_17">檯燈</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="檯燈">
                                                                <label for="search_features_17">檯燈</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '寬頻網路') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="寬頻網路" checked>
                                                                <label for="search_features_18">寬頻網路</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="寬頻網路">
                                                                <label for="search_features_18">寬頻網路</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '電話') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="電話" checked>
                                                                <label for="search_features_19">電話</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="電話">
                                                                <label for="search_features_19">電話</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '瓦斯') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="瓦斯" checked>
                                                                <label for="search_features_20">瓦斯</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="瓦斯">
                                                                <label for="search_features_20">瓦斯</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '熱水器') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="熱水器" checked>
                                                                <label for="search_features_21">熱水器</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="熱水器">
                                                                <label for="search_features_21">熱水器</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '可養寵物') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="可養寵物" checked>
                                                                <label for="search_features_22">可養寵物</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="可養寵物">
                                                                <label for="search_features_22">可養寵物</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>

                                                    <li class="search_features_item">
                                                        <div>
                                                            <?php
                                                            if (strpos($equip, '有對外窗') !== false) {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="有對外窗" checked>
                                                                <label for="search_features_23">有對外窗</label>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <input type="checkbox" name="fixeq[]" value="有對外窗">
                                                                <label for="search_features_23">有對外窗</label>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </li>
                                            
                                            <div class="drop" style="margin-top: -100px;margin-left: 15px;">
                                                <li class="dropdown_item dropdown_item_5" style="width: 100px;">
                                                    <div class="dropdown_item_title">出租類型</div>
                                                    <?php
                                                    if (strpos($roomstyle, 'nor') !== false) {
                                                    ?>
                                                        <select name="fixroomstyle">
                                                            <option value="nor" selected>不限</option>
                                                            <option value="room">房間</option>
                                                            <option value="suite">套房</option>
                                                            <option value="wholehouse">整棟</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($roomstyle, 'room') !== false) {
                                                    ?>
                                                        <select name="fixroomstyle">
                                                            <option value="nor">不限</option>
                                                            <option value="room" selected>房間</option>
                                                            <option value="suite">套房</option>
                                                            <option value="wholehouse">整棟</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($roomstyle, 'suite') !== false) {
                                                    ?>
                                                        <select name="fixroomstyle">
                                                            <option value="nor">不限</option>
                                                            <option value="room">房間</option>
                                                            <option value="suite" selected>套房</option>
                                                            <option value="wholehouse">整棟</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($roomstyle, 'wholehouse') !== false) {
                                                    ?>
                                                        <select name="fixroomstyle">
                                                            <option value="nor">不限</option>
                                                            <option value="room">房間</option>
                                                            <option value="suite">套房</option>
                                                            <option value="wholehouse" selected>整棟</option>
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }
                                                    ?>
                                                </li>

                                                <li class="dropdown_item dropdown_item_5" style="width: 100px;">
                                                    <div class="dropdown_item_title">鄰近入口</div>
                                                    <?php
                                                    if (strpos($entrance, 'noe') !== false) {
                                                    ?>
                                                        <select name="fixentrance">
                                                            <option value="noe" selected>不限</option>
                                                            <option value="door">大門</option>
                                                            <option value="sidedoor">514側門</option>
                                                            <option value="backdoor">貴子路門(後門)</option>]
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($entrance, 'door') !== false) {
                                                    ?>
                                                        <select name="fixentrance">
                                                            <option value="noe">不限</option>
                                                            <option value="door" selected>大門</option>
                                                            <option value="sidedoor">514側門</option>
                                                            <option value="backdoor">貴子路門(後門)</option>]
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($entrance, 'sidedoor') !== false) {
                                                    ?>
                                                        <select name="fixentrance">
                                                            <option value="noe">不限</option>
                                                            <option value="door">大門</option>
                                                            <option value="sidedoor" selected>514側門</option>
                                                            <option value="backdoor">貴子路門(後門)</option>]
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($entrance, 'backdoor') !== false) {
                                                    ?>
                                                        <select name="fixentrance">
                                                            <option value="noe">不限</option>
                                                            <option value="door">大門</option>
                                                            <option value="sidedoor">514側門</option>
                                                            <option value="backdoor" selected>貴子路門(後門)</option>]
                                                        </select>
                                                    <?php
                                                    } else {
                                                    }
                                                    ?>
                                                </li>
                                                <li class="dropdown_item dropdown_item_5" style="width: 100px;">
                                                    <div class="dropdown_item_title">步行時間</div>
                                                    <?php
                                                    if (strpos($walktime, 'not') !== false) {
                                                    ?>
                                                        <select name="fixwalktime">
															<option value = "not" selected>不限</option>
															<option value = "five">5分鐘內</option>
															<option value = "fifteen">5-15分鐘</option>
															<option value = "above">15分鐘以上</option>
														</select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($walktime, 'five') !== false) {
                                                    ?>
                                                        <select name="fixwalktime">
															<option value = "not">不限</option>
															<option value = "five" selected>5分鐘內</option>
															<option value = "fifteen">5-15分鐘</option>
															<option value = "above">15分鐘以上</option>
														</select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($walktime, 'suite') !== false) {
                                                    ?>
                                                        <select name="fifteen">
															<option value = "not">不限</option>
															<option value = "five">5分鐘內</option>
															<option value = "fifteen" selected>5-15分鐘</option>
															<option value = "above">15分鐘以上</option>
														</select>
                                                    <?php
                                                    } else {
                                                    }

                                                    if (strpos($walktime, 'above') !== false) {
                                                    ?>
                                                        <select name="fixwalktime">
															<option value = "not">不限</option>
															<option value = "five">5分鐘內</option>
															<option value = "fifteen">5-15分鐘</option>
															<option value = "above" selected>15分鐘以上</option>
														</select>
                                                    <?php
                                                    } else {
                                                    }
                                                    ?>
                                                </li>
                                            </div>
                                            <div class="yo" style="margin-left: -5px;">
                                                <li class="dropdown_item">
                                                    <br>
                                                    <div class="dropdown_item_title1">詳細介紹</div>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control1" name="fixintroduce" value=<?php echo $introduce; ?>>
                                                    </div>
                                                </li>
                                            </div>
                                            <br><br><br><br>
                                        </div>
                                        </ul>
                                        <div class="search_features_container"><br><br><br><br>
                                            <div class="search_button">
                                                <input value="修改房屋" type="submit" class="search_submit_button1" >
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </form>


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