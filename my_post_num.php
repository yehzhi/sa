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

    <style>
        .sidebar_col {
            background-color: #A1A8C6;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center; /* 垂直居中 */
        }
        .sidebar_item {
            list-style: none;
            padding: 20px 0; /* 增加上下間距 */
            text-align: center; /* 水平居中 */
        }
        .sidebar_item a {
            color: #ffffff;
            text-decoration: none;
            font-size: 22px; 
            font-weight: bold; /* 字體加粗 */
        }
        .sidebar_item a:hover {
            color: #f9e46c;
        }
    </style>
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
                            <nav class="main_nav">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index-te.php">首頁</a></li>
								<li class="main_nav_item">
									<a href="discuss_num.html" class="dropdown-toggle" data-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false">討論區</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="discuss_num.php">有編號房屋</a>
										<a class="dropdown-item" href="discuss_nonum.php">無編號房屋</a>
                                        <a class="dropdown-item" href="my_post_num.php">我的發文</a>
									</div>
								</li>							
								<li class="main_nav_item"><a href="collect.php">我的收藏</a></li>
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

        <div class="listings">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 sidebar_col">
                        <ul>
                            <li class="sidebar_item"><a href="my_post_num.php">有編號討論區</a></li>
                            <li class="sidebar_item"><a href="my_post_nonum.php">無編號討論區</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-10 listings_col">
                        <?php
                        session_start();
                        $servername = "localhost";
                        $username = "root";
                        $dbname = "sa";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $_account = $_SESSION['tenant']['account'];
                        $sql = "SELECT * FROM numbered_post WHERE status='approved' AND account='$_account'"; 

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

                                echo '<div class="listing_item">';
                                echo '<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">';
                                echo '<div class="listing_content">';
                                echo '<div class="listing_title"><a href="post_num_all.php?post_id=' . $post_id . '">' . $article . '</a></div>';
                                echo '<div class="listing_text">房屋編號: ' . $verify_id . '<br>評分:' . $star_rate . '分<br>日期: ' . $post_date . '<br>發文者: ' . $lastname . $prefix . '</div>';
                                echo '<a class="btn btn-custom" href="fix.php?post_id=<?php echo $post_id; ?>" role="button" style="margin-top: 10px; ">修改發文</a>';
                                echo '<div class="delete_button">';
                                echo '<form id="delete_form_'.$post_id.'" method="post" action="delete_post.php">';
                                echo '<input type="hidden" name="post_id" value="' . $post_id . '">';
                                echo '<button type="button" class="btn btn-danger" onclick="confirmDelete('.$post_id.')" style="margin-top: -63px; margin-left: 100px;"><i class="fas fa-trash"></i> 刪除</button>';
                                echo '</form>';
                                echo '</div>';
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
    <script>
					function confirmDelete(post_id) {
						if (confirm("確定要刪除嗎？")) {
							document.getElementById('delete_form_' + post_id).submit();
						} else {
							//用戶點擊取消，不做任何操作
						}
					}
				</script>
    <script src="https://kit.fontawesome.com/f869dac2a8.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/listings_custom.js"></script>
</body>

</html>
