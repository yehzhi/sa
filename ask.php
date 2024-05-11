<?php
// 使用 composer 安裝 JWT 庫
require __DIR__ . '/vendor/autoload.php';

use Firebase\JWT\JWT;

// 獲取用戶名和密碼（這裡是假設的，您可以根據您的登入方式獲取用戶名和密碼）
$account = "account";
$password = "password";

// 檢查用戶名和密碼是否有效
if ($username === "user" && $password === "password") {
    // 生成 JWT
    $payload = array(
        "username" => $username,
        "exp" => time() + (60 * 60) // JWT 有效期為 1 小時
    );
    $jwt = JWT::encode($payload, "your_secret_key");

    // 返回 JWT 給用戶
    echo json_encode(array("jwt" => $jwt));
} else {
    // 如果用戶名或密碼無效，返回錯誤消息
    echo json_encode(array("error" => "Invalid username or password"));
}
?>
