<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "19990817";
$dbname = "sa";

$conn = new mysqli($servername, $username, $password, $dbname);

$krent = $_POST["krent"];
$kgender = $_POST["kgender"];
$equip = $_POST["eq"];
$kroomstyle = $_POST["kroomstyle"];
$kentrance = $_POST["kentrance"];
$kwalktime = $_POST["kwalktime"];
$checkbox_values = implode(",", $_POST['eq']);

$sql = "SELECT * FROM information WHERE ";

if ($krent != "租金無限制") {
    switch ($krent) {
        case '3000元以下':
            $sql .= "i_rent < 3000";
            break;
        case '3000元到5000元':
            $sql .= "i_rent >= 3000 AND i_rent  <= 5000";
            break;
        case '5000元到10000元':
            $sql .= "i_rent > 5000 AND i_rent  <= 10000";
            break;
        case '10000元到15000元':
            $sql .= "i_rent > 10000 AND i_rent  <= 15000";
            break;
        case '15000到20000元':
            $sql .= "i_rent > 15000 AND i_rent  <= 20000";
            break;
        case '20000元以上':
            $sql .= "i_rent  > 20000";
            break;
    }
}


if ($kroomtype != "出租無限制") {
    if ($krent != "租金無限制") {
        $sql .= " AND ";
    }
    $sql .= "i_roomtype = '$kroomtype'";
}


if ($kentrance != "入口無限制") {
    if ($krent != "租金無限制" || $kroomtype != "出租無限制") {
        $sql .= " AND ";
    }
    $sql .= "i_entrance = '$kentrance'";
}


if ($kwalktime != "步行無限制") {
    if ($krent != "租金無限制" || $kroomtype != "出租無限制" || $kentrance != "入口無限制") {
        $sql .= " AND ";
    }
    $sql .= "i_walktime = '$kwalktime'";
}


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        
        echo "租金: " . $row["i_rent"] . "<br>";
        echo "出租類型: " . $row["i_roomstyle"] . "<br>";
        echo "入口: " . $row["i_entrance"] . "<br>";
        echo "時間: " . $row["i_waiktime"] . "<br>";
        
    }
} else {
    echo "没有找到匹配的结果";
}

$conn->close();
?>
