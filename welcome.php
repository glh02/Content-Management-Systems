<?php
session_start();

// 如果没有登录，则重定向到登录页面
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the apex games website !</title>
    <link rel="stylesheet" type="text/css" href="photostyle.css">
</head>
<body>
    <h2>Welcome to the apex games website ! <?php echo htmlspecialchars($username); ?>！</h2>
    <p>Next, you will see the introduction of apex.</p>

    <!-- 继续按钮，跳转到 index.php -->
    <form action="index.php" method="get">
        <button type="submit">continue </button>
    </form>    
    
    <!-- 退出登录链接 -->
    <a href="logout.php">logout </a><br><br>


</body>
</html>
