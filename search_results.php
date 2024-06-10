<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sa";
$conn = new mysqli($servername, $username, $password, $dbname, 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 處理搜索條件
$conditions = [];
$params = [];

// 檢查是否有輸入關鍵字
if (!empty($_GET['keyword'])) {
    $keyword = "%" . $conn->real_escape_string($_GET['keyword']) . "%";
    $conditions[] = "(i_title LIKE ? OR i_address LIKE ?)";
    $params[] = $keyword;
    $params[] = $keyword;
}

// 租金
if (!empty($_GET['rent'])) {
    switch ($_GET['rent']) {
        case '3000以下':
            $conditions[] = "i_min < ?";
            $params[] = 3000;
            break;
        case '3000-5000':
            $conditions[] = "(i_min >= ? AND i_max <= ?)";
            $params[] = 3000;
            $params[] = 5000;
            break;
        case '5000-10000':
            $conditions[] = "(i_min >= ? AND i_max <= ?)";
            $params[] = 5000;
            $params[] = 10000;
            break;
        case '10000-15000':
            $conditions[] = "(i_min >= ? AND i_max <= ?)";
            $params[] = 10000;
            $params[] = 15000;
            break;
        case '15000-20000':
            $conditions[] = "(i_min >= ? AND i_max <= ?)";
            $params[] = 15000;
            $params[] = 20000;
            break;
        case '20000以上':
            $conditions[] = "i_max > ?";
            $params[] = 20000;
            break;
    }
}

// 出租類型
if (!empty($_GET['roomstyle'])) {
    $conditions[] = "i_roomstyle = ?";
    $params[] = $conn->real_escape_string($_GET['roomstyle']);
}

// 鄰近入口
if (!empty($_GET['entrance'])) {
    $conditions[] = "i_entrance = ?";
    $params[] = $conn->real_escape_string($_GET['entrance']);
}

// 步行時間
if (!empty($_GET['walktime'])) {
    $conditions[] = "i_walktime = ?";
    $params[] = $conn->real_escape_string($_GET['walktime']);
}

// 性別
if (!empty($_GET['gender'])) {
    $conditions[] = "i_gender = ?";
    $params[] = $conn->real_escape_string($_GET['gender']);
}

// 設備
if (!empty($_GET['equipment'])) {
    foreach ($_GET['equipment'] as $equipment) {
        $conditions[] = "i_equip LIKE ?";
        $params[] = "%" . $conn->real_escape_string($equipment) . "%";
    }
}

// 押金
if (!empty($_GET['deposit'])) {
    $conditions[] = "i_deposit = ?";
    $params[] = $conn->real_escape_string($_GET['deposit']);
}

// 水電
if (!empty($_GET['utility'])) {
    $conditions[] = "i_utility = ?";
    $params[] = $conn->real_escape_string($_GET['utility']);
}

// 建立 SQL 查詢
$sql = "SELECT vid, i_title, i_address, i_equip, i_min, i_max, i_roomstyle, i_gender, i_walktime, i_photo, i_deposit, i_deposit_amount, i_utility, u_amount, u_cal FROM information";
if (count($conditions) > 0) {
    $sql .= " WHERE " . implode(' AND ', $conditions);
}

// 準備和綁定參數
$stmt = $conn->prepare($sql);
if ($stmt) {
    if (!empty($params)) {
        $stmt->bind_param(str_repeat('s', count($params)), ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();

    // 開始 HTML 輸出
    echo '<!DOCTYPE html>
    <html lang="zh-Hant">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>搜尋結果</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            .flat {
                background: #fff;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                margin: 20px;
                width: 300px;
                display: inline-block;
                vertical-align: top;
            }
            .image_wrapper {
                position: relative;
            }
            .image_wrapper img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
            .featured_panel {
                position: absolute;
                top: 10px;
                left: 10px;
                background: rgba(0,0,0,0.7);
                color: #fff;
                padding: 5px 10px;
                border-radius: 4px;
            }
            .t_wrapper {
                padding: 20px;
            }
            .t_wrapper h2 {
                margin: 0 0 10px;
                font-size: 1.2em;
                color: #333;
            }
            .t_wrapper p {
                margin: 5px 0;
                color: #666;
            }
            .equip {
                margin-top: 10px;
            }
            .equip img {
                width: 20px;
                height: 20px;
                margin-right: 5px;
            }
            .e_text {
                display: inline;
                margin-right: 10px;
                color: #666;
            }
            .room_tags {
                margin-top: 10px;
            }
            .room_tag {
                display: inline-block;
                background: #ddd;
                color: #555;
                padding: 5px 10px;
                border-radius: 4px;
                margin-right: 5px;
            }
            .featured_card_box {
                background: #2c3e50;
                color: #fff;
                padding: 10px;
                display: flex;
                align-items: center;
            }
            .featured_card_box img {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }
            .featured_card_box_content {
                display: flex;
                align-items: center;
            }
            .featured_card_price_title {
                font-size: 0.8em;
                margin-bottom: 5px;
            }
            .featured_card_price {
                font-size: 1.2em;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <div class="container">';

    // 輸出結果
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='flat'>";
            echo "<a href='detail.php?vid=" . htmlspecialchars($row['vid']) . "'>";
            echo "<div class='image_wrapper'>";
            echo "<img src='file/" . htmlspecialchars($row['i_photo']) . "' alt=''>";
            echo "<div class='featured_panel'> " . htmlspecialchars($row['i_roomstyle']) . " </div>";
            echo "<div class='t_wrapper'>";
            echo "<h2>" . htmlspecialchars($row['i_title']) . "</h2>";
            echo "<p>房屋編號: " . htmlspecialchars($row['vid']) . "</p>";
            echo "<p>地址: " . htmlspecialchars($row['i_address']) . "</p>";
            if (!empty($row['i_deposit'])) {
                echo "<p>押金: " . htmlspecialchars($row['i_deposit']) . " " . htmlspecialchars($row['i_deposit_amount']) . "元</p>";
            }
            if (!empty($row['i_utility'])) {
                echo "<p>水電: " . htmlspecialchars($row['i_utility']) . " " . htmlspecialchars($row['u_amount']) . "</p>";
                echo "<p>水電計算方式: " . htmlspecialchars($row['u_cal']) . "</p>";
            }
            echo "<div class='equip'>";
            $equipments = explode(',', $row['i_equip']);
            foreach ($equipments as $equipment) {
                
            echo "<p class='e_text'>" . htmlspecialchars(trim($equipment)) . "</p>";
            }
            echo "</div>";
            echo "<div class='room_tags'>";
            echo "<span class='room_tag'>" . htmlspecialchars($row['i_gender']) . "</span>";
            echo "<span class='room_tag'>" . htmlspecialchars($row['i_walktime']) . "</span>";
            echo "</div></div></div></a>";
            echo "<div class='featured_card_box d-flex flex-row align-items-center trans_300'>";
            echo "<img class='icon' src='images/icon/m.svg' alt=''>";
            echo "<div class='featured_card_box_content d-flex flex-row align-items-center'>";
            echo "<div>";
            echo "<div class='featured_card_price_title'>每月</div>";
            echo "<div class='featured_card_price'>" . htmlspecialchars($row['i_min']) . "-" . htmlspecialchars($row['i_max']) . "元</div>";
            echo "</div></div></div></div>";
        }
    } else {
        echo "無符合條件的結果";
    }

    echo '</div>
    </body>
    </html>';

    $stmt->close();
} else {
    echo "查詢錯誤: " . $conn->error;
}

$conn->close();
?>
