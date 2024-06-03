<!DOCTYPE html>
<html lang="en">

<head>
    <title>輔仁大學租屋上架房屋</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="The Estate Template">
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
        <div class="featured">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="color: #555e81;text-align: center;margin-top: 30px;"><b>被檢舉文章</b></h1>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="home2" style="width: 1000px; margin: 0 auto;">
                    <?php
					
					$servername = "localhost";
					$username = "root";
					$password = ""; 
					$dbname = "sa";

                    $conn = new mysqli($servername, $username, $password, $dbname,3307);

					if ($conn->connect_error) {
						die("連接失败: " . $conn->connect_error);
					}

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $post_id = $_POST['post_id'];
                        if (isset($_POST['action']) && $_POST['action'] === 'delete') {
                            $stmt = $mysqli->prepare("DELETE FROM discuss_nonum WHERE post_id = ?");
                            $stmt->bind_param("i", $post_id);
                            $stmt->execute();
                            $stmt = $mysqli->prepare("DELETE FROM report WHERE post_id = ?");
                            $stmt->bind_param("i", $post_id);
                            $stmt->execute();
                            echo "文章已刪除";
                        } elseif (isset($_POST['action']) && $_POST['action'] === 'fail') {
                            $stmt = $mysqli->prepare("DELETE FROM report WHERE post_id = ?");
                            $stmt->bind_param("i", $post_id);
                            $stmt->execute();
                            echo "檢舉已取消";
                        }
                    }

						$sql = "SELECT * FROM report";
						$result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="listing_item">';
                            echo '<div class="listing_item_inner d-flex flex-md-row flex-column trans_300">';
                            echo '<div class="listing_content">';
                            echo '<div class="listing_title">' . $row["article"] . '</div>';
                            echo '<div class="listing_text">評分:' . $row["star_rate"] . '分<br>日期: ' . $row["post_date"] . '<br>發文者: ' . $row["lastname"] . '</div>';
                            echo '<form method="post" action="report.php">';
                            echo '<input type="hidden" name="post_id" value="' . $row["post_id"] . '">';
                            echo '<button type="submit" name="action" value="delete">刪除文章</button>';
                            echo '<button type="submit" name="action" value="fail">檢舉失敗</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 結果";
                    }

					$conn->close();
                    ?>
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
