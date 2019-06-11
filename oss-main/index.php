<?php
/**
 * Created by PhpStorm.
 * User: Mr.Chen
 * Date: 2018/9/7
 */

require_once __DIR__ . '/../Config.php';

session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>sync login</title>
</head>
<body>

<?php if (empty($_SESSION['user_info'])): ?>
    hello <strong>游客</strong> 请先<a href="login.php">登录</a>
<?php else: ?>
    hello,<strong><?php echo $_SESSION['user_info']['username']; ?></strong>
    <hr/>
    <a href="<?= Config::TWO_URL ?>">进入空间</a>
    <a href="logout.php">一键退出</a>
<?php endif; ?>

<hr>
</body>
</html>
