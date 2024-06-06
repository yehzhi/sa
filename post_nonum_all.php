<!DOCTYPE html>
<html>

<head>
    <title>文章詳細內容</title>
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

                            <?php
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
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>';
                                echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>';
                                echo '</ul>';
                                echo '</li>';
                                echo '</ul>';
                                echo '</nav>';
                            }   elseif(isset($_SESSION['landlord']['account'])){
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
								echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="info.html">修改個人資料</a></li>';
								echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="#">檢舉</a></li>';
								echo '<li style="background-color: #a1a8c6;"><a class="dropdown-item" href="logout.php">登出</a></li>';
								echo '</ul>';
								echo '</li>';
								echo '</ul>';
								echo '</nav>';
							
						}else {
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

        <!-- Featured Properties -->

        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b></b></h1>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <br>
                <div class="home2" style="width: 1000px; margin: 0 auto; ">

                    <?php
                    
                    if(isset($_GET['post_id'])) {
                        $post_id = $_GET['post_id'];

                        
                        $servername = "localhost";
                        $username = "root";
                        $password = ""; 
                        $dbname = "sa";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        
                        if ($conn->connect_error) {
                            die("連接失敗: " . $conn->connect_error);
                        }

                        
                        $sql = "SELECT * FROM post WHERE post_id = '$post_id'";
                        $result = $conn->query($sql);

                        
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                $article = $row["article"];
                                $content = $row["content"];
                                $address = $row["address"];
                                $star_rate = $row["star_rate"];
                                $post_date= $row["post_date"];
                                $lastname = $row["lastname"];
                                $gender = $row["gender"];
                                $house_photo=$row["house_photo"];
		                        $path="post/" .$house_photo;
		                        echo "<a href='post_nonum_all.php?post_id=$post_id'>";

				                if ($gender === "f") {
				                    $prefix = "小姐";
				                } elseif ($gender === "m") {
				                    $prefix = "先生";
				                } else {
				                    $prefix = "";
				                }

                                ?>

                                
                                <div class="listing_item">
                                    <div class="listing_item_inner d-flex flex-md-row-reverse flex-column trans_300">
                                        <div class="listing_content">
                                            <div class="listing_title"><a href="post_nonum_all.php?post_id=<?php echo $post_id; ?>"><?php echo $article; ?></a></div>
                                            <div class="listing_text">
                                                評分: <?php echo $star_rate; ?>分<br>
                                                地址: <?php echo $address; ?><br>
                                                <span class="highlighted-content"><?php echo $content; ?></span><br> <!-- 使用highlighted-content類 -->
                                                日期: <?php echo $post_date; ?><br>
                                                發文者: <?php echo $lastname . $prefix; ?>
                                            <div class="report_button_container">
                                                <button onclick="showReportForm()">檢舉文章</button>
                                            </div>
                                            </div>
                                            <style>
                                            .highlighted-content {
                                                font-size: 16px; /* 設置字體大小 */
                                                color: #5A6493; /* 設置字體顏色 */
                                                font-weight: bold; /* 加粗字體 */
                                            }
                                            </style>
                                        </div>
                                        <div class="listing_image ml-md-auto">
                                            <img src="<?php echo $path; ?>" alt="House Photo" width="300" height="200">
                                        </div>
                                    </div>
                                </div>

                                <!-- Report Form Modal -->
                                <div class="modal" id="reportModal" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">檢舉文章</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="reportForm">
                                                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                                                    <div class="form-group">
                                                        <label>檢舉原因</label>
                                                        <div>
                                                            <input type="checkbox" name="reason[]" value="不當內容"> 不當內容<br>
                                                            <input type="checkbox" name="reason[]" value="詐騙"> 詐騙<br>
                                                            <input type="checkbox" name="reason[]" value="暴力內容"> 暴力內容<br>
                                                            <input type="checkbox" name="reason[]" value="侵權"> 侵權<br>
                                                            <input type="checkbox" name="reason[]" value="其他"> 其他<br>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">送出</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                function showReportForm() {
                                    $('#reportModal').modal('show');
                                }

                                document.getElementById('reportForm').addEventListener('submit', function(event) {
                                    event.preventDefault();
                                    var formData = new FormData(this);
                                    fetch('submit_report.php', {
                                        method: 'POST',
                                        body: formData
                                    })
                                    .then(response => response.text())
                                    .then(data => {
                                        alert('檢舉已提交');
                                        $('#reportModal').modal('hide');
                                    })
                                    .catch(error => {
                                        alert('提交檢舉時發生錯誤');
                                    });
                                });
                                </script>

                    <?php  }
                        } else {
                            echo "沒找到相關文章";
                        }

                        
                        $conn->close();
                    } else {
                        echo "沒有傳遞參數";
                    }
                    ?>

                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <!-- Footer Content Here -->
            </div>
        </footer>

    </div>

    <!-- Scripts -->
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
