<?php
session_start();

// 如果没有登录，则重定向到登录页面
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

// 定义一个函数来问候用户
function greetUser($name) {
    return "Welcome, " . htmlspecialchars($name) . "!";
}

// 图片数组（用于展示多张图片）
$images = ["apex1.jpg", "apex2.jpg", "apex3.jpg"];
?>

<?php include 'header.php'; ?>  <!-- 引入头部 -->

<h2><?php echo greetUser($username); ?></h2>
<p> Apex Legends, one of the best shooting games in the world! </p>

<!-- 用循环展示多张图片 -->
<div>
    <?php foreach ($images as $img): ?>
        <img src="images/<?php echo $img; ?>" alt="Apex Image" style="width:200px; height:auto; margin:10px;">
    <?php endforeach; ?>
</div>


<!-- 退出登录链接 -->
<a href="logout.php">Logout</a><br><br>

<!-- 继续按钮，跳转到 about.php -->
<form action="about.php" method="get">
    <button type="submit">About</button>
</form>

<?php include 'footer.php'; ?>  <!-- 引入底部 -->

