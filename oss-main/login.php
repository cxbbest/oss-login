<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    require_once __DIR__ . '/../Config.php';

    $_SESSION['user_info'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'login_time' => date('Y-m-d H:i:s')
    ];
    $json_data = json_encode($_SESSION['user_info'], JSON_UNESCAPED_UNICODE);

    $redirect = Config::BAS_URL;

    $code = openssl_encrypt($json_data, Config::CRYPT_METHOD, Config::CRYPT_KEY);

    //file_put_contents('../test', 'login：'.urlencode($code) . PHP_EOL, 8);

    header('Location:' . $redirect . '/sync.php?redirect=' . urlencode($redirect) . '&code=' . urlencode($code));
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>sync login</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="username" placeholder="用户名"/>
    <input type="text" name="password" placeholder="密码"/>
    <input type="submit" value="登录"/>
</form>
</body>
</html>