<?php
session_start();
include 'db.php';  // 引入数据库连接


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 查询数据库中的用户
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // 验证密码
    if ($user && $user['password'] === $password) {
        // 密码验证通过，保存会话
        $_SESSION['username'] = $username;
        // 重定向到欢迎页面
        header("Location: welcome.php");
        exit;
    } else {
        // 用户名或密码错误
        $error = "用户名或密码错误";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>登录</title></head>
<body>
    <?php include 'header.php'; ?>  <!-- 引入头部 -->

    <h2>用户登录</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

    <p>"Apex Legends" </p>
    <img src="images/apex1.jpg" alt="Apex Legends">

    <form method="POST">
        用户名: <input type="text" name="username" required><br>
        密码: <input type="password" name="password" required><br>
        <button type="submit">登录</button>
    </form>
    <?php include 'footer.php'; // 引入公共页脚 ?>
</body>
</html>
