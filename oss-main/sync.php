<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

$redirect = empty($_GET['redirect']) ? 'sso-main.test' : $_GET['redirect'];
if (empty($_GET['code'])) {
    header('Loaction:http://' . urldecode($redirect));
    exit;
}

$apps = array(
    'sso-next.test/slogin.php'
);

//file_put_contents('../test', 'sync：'.urlencode($_GET['code']) . PHP_EOL, 8);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <?php foreach ($apps as $v): ?>
        <script type="text/javascript" src="http://<?php echo $v . '?code=' . urlencode($_GET['code']) ?>"></script>
    <?php endforeach; ?>
    <title>passport</title>
</head>
<body>
<script type="text/javascript">
    window.onload = function () {
        location.replace('<?php echo $redirect; ?>');
    }
</script>
</body>
</html>