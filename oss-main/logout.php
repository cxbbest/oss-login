<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

session_start();

$_SESSION['user_info'] = null;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <script type="text/javascript" src="http://sso-next.test/slogout.php"></script>
    <title>passport</title>
</head>
<body>
<script type="text/javascript">
    window.onload = function () {
        location.replace('http://sso-main.test');
    }
</script>
</body>
</html>