<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

/*require_once '../Config.php';

$user_info = [
    'username' => 'www',
    'password' => 'eweee',
    'login_time' => $_SERVER['REQUEST_TIME']
];
$json_data = json_encode($user_info, JSON_UNESCAPED_UNICODE);

//$data = openssl_encrypt($json_data,Config::$method,Config::$key);
$data = 'BZwdiOUpscO1RcKuBYRJjTfe+wygH5LY6uG819khkSz5N1m1jzsD3oS/o6BvV1c7l/DbDXxGpNCOPkhqJW3HbG1HlCNwx+rq';


$de_data = openssl_decrypt($data, Config::$method, Config::$key);

var_dump($de_data);
exit;*/

/*echo '<pre>';
print_r(openssl_get_cipher_methods());
echo '</pre>';

exit;*/


header("Content-Type: text/html;charset=utf-8");

session_start();

if (!empty($_SESSION['user_info'])) {
    echo "欢迎来到<strong> " . $_SESSION['user_info']['username'] . " </strong>的空间" . PHP_EOL;

    echo '<pre>';
    print_r($_SESSION['user_info']);
    echo '</pre>';


} else {
    echo "请先登录";
}