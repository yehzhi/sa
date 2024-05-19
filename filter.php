<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "19990817";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

$krent = $_POST["krent"];
$kgender = $_POST["kgender"];
$equip = isset($_POST["eq"]) ? $_POST["eq"] : [];
$kroomstyle = $_POST["kroomstyle"];
$kentrance = $_POST["kentrance"];
$kwalktime = $_POST["kwalktime"];
$checkbox_values = implode(",", $equip);

$sql = "SELECT * FROM information WHERE 1=1";

if ($krent != "租金無限制") {
    switch ($krent) {
        case '3000元以下':
            $sql .= " AND i_rent < 3000";
            break;
        case '3000元-5000元':
            $sql .= " AND i_rent >= 3000 AND i_rent <= 5000";
            break;
        case '5000元-10000元':
            $sql .= " AND i_rent > 5000 AND i_rent <= 10000";
            break;
        case '10000元-15000元':
            $sql .= " AND i_rent > 10000 AND i_rent <= 15000";
            break;
        case '15000元-20000元':
            $sql .= " AND i_rent > 15000 AND i_rent <= 20000";
            break;
        case '20000元以上':
            $sql .= " AND i_rent > 20000";
            break;
    }
}

if ($kroomstyle != "出租無限制") {
    $sql .= " AND i_roomstyle = '$kroomstyle'";
}

if ($kentrance != "入口無限制") {
    $sql .= " AND i_entrance = '$kentrance'";
}

if ($kwalktime != "步行無限制") {
    $sql .= " AND i_walktime = '$kwalktime'";
}

if ($kgender != "nol") {
    $sql .= " AND i_gender = '$kgender'";
}

if (!empty($equip)) {
    foreach ($equip as $item) {
        $sql .= " AND i_equip LIKE '%$item%'";
    }
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "租金: " . $row["i_rent"] . "<br>";
        echo "出租類型: " . $row["i_roomstyle"] . "<br>";
        echo "入口: " . $row["i_entrance"] . "<br>";
        echo "時間: " . $row["i_walktime"] . "<br>";
        echo "設備: " . $row["i_equip"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "没有找到匹配的结果";
}

$conn->close();
?>
