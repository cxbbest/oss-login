<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

session_start();
header('Content-Type:text/javascript; charset=utf-8');

if (!empty($_GET['code'])) {
    require_once __DIR__ . '/../Config.php';

    //file_put_contents('../test', 'slogin：'.$_GET['code'] . PHP_EOL, 8);

    $user_info = json_decode(openssl_decrypt($_GET['code'], Config::CRYPT_METHOD, Config::CRYPT_KEY), true);

    if (!empty($user_info)) {
        header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
        $_SESSION['user_info'] = $user_info;
    }
}