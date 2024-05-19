<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    foreach ($results as $row) {
        echo "租金: " . $row["i_rent"] . "<br>";
        echo "出租類型: " . $row["i_roomstyle"] . "<br>";
        echo "入口: " . $row["i_entrance"] . "<br>";
        echo "時間: " . $row["i_walktime"] . "<br>";
        echo "設備: " . $row["i_equip"] . "<br>";
        echo "<hr>";
    }
    // 清空結果，避免重複顯示
    unset($_SESSION['results']);
} else {
    echo "没有找到匹配的结果";
}
?>
</body>
</html>