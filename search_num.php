<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 獲取表單輸入值
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$verify_id = isset($_GET['verify_id']) ? $_GET['verify_id'] : '';
$article = isset($_GET['article']) ? $_GET['article'] : '';
$month = isset($_GET['month']) ? $_GET['month'] : '';
$star_rate = isset($_GET['star_rate']) ? $_GET['star_rate'] : '-1';
$address = isset($_GET['address']) ? $_GET['address'] : '';


$sql = "SELECT * FROM numbered_post WHERE 1=1";

// 添加搜索條件
if (!empty($keyword)) {
    $sql .= " AND content LIKE '%$keyword%'";
}
if (!empty($verify_id)) {
    $sql .= " AND verify_id LIKE '%$verify_id%'";
}
if (!empty($article)) {
    $sql .= " AND article LIKE '%$article%'";
}
if (!empty($month)) {
    $formatted_month = date('Y-m', strtotime($month));
    $sql .= " AND DATE_FORMAT(post_date, '%Y-%m') = '$formatted_month'";
}
if ($star_rate != '-1') {
    $sql .= " AND star_rate = '$star_rate'";
}
if (!empty($address)) {
    $sql .= " AND address LIKE '%$address%'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {  
        $post_id = $row["post_id"];
        $verify_id = $row["verify_id"];
        $article = $row["article"];
        $address = $row["address"];
        $star_rate = $row["star_rate"];
        $post_date = $row["post_date"];
        $gender = $row["gender"];
        $lastname = $row["lastname"];
        $house_photo = $row["house_photo"];
        
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
        echo '<div class="listing_text">房屋編號: ' . $verify_id . '<br>評分:' . $star_rate . '分<br>地址:' . $address . '<br>日期: ' . $post_date . '<br>發文者: ' . $lastname . $prefix . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
    }
}  else {
        echo '<script type="text/javascript">';
        echo 'alert("查無結果");';
        echo 'window.location.href = "discuss_num.php";';
        echo '</script>';
}

$conn->close();
?>
