<?php
session_start();

// 如果没有登录，则重定向到登录页面
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<?php include 'header.php'; ?>  <!-- 引入头部 -->

<!DOCTYPE html>
<html>
<head>
    <title>About Apex Legends, </title>
    <link rel="stylesheet" type="text/css" href="photostyle.css">
</head>
<body>
    <h2>About Apex Legends, <?php echo htmlspecialchars($username); ?>！</h2>

    <p>"Apex Legends" is a free tactical battle royale game developed by Respawn Entertainment and published by EA, set in the sci-fi "Frontier" universe 30 years after the "Titanfall" series.</p>
    <img src="images/apex1.jpg" alt="Apex Legends">

    <p>Players form three-person squads to compete in a 60-player survival showdown, where the last surviving team claims victory.</p>
    <img src="images/apex2.jpg" alt="Apex Gameplay">

    <p>The game combines character-specific skill systems with classic battle royale mechanics, offering over 18 unique heroes, such as ​Bloodhound (passively marks enemy trails), ​Lifeline (summons a healing robot and supply drops), and ​Wraith (creates portals for team repositioning).</p>
    <img src="images/apex3.jpg" alt="Apex Legends Characters">

    <p>Key features include dynamic shrinking zones, differentiated headshot damage for weapons (e.g., 2x multiplier for sniper rifles), and an innovative respawn system allowing teammates to revive fallen players via beacons.</p>
    <img src="images/apex4.jpg" alt="Apex Legends Features">

    <p>The game continually introduces new characters like defensive ​Newcastle and recon-focused ​Vantage, while optimizing cross-platform play with 4K resolution and 120FPS modes.</p>
    <img src="images/apex5.jpg" alt="Apex Legends New Characters">

    <p>With its team collaboration mechanics (e.g., voice-ping system) and sci-fi map design, "Apex Legends" has become a benchmark in the tactical battle royale genre.</p>
    <img src="images/apex6.jpg" alt="Apex Legends Map">



    <!-- 返回首页按钮 -->
    <form action="index.php" method="get">
        <button type="submit">home</button>
    </form>

     <!-- 退出登录链接 -->
     <a href="logout.php">logout</a><br><br>

     
<?php include 'footer.php'; ?>  <!-- 引入底部 -->
</body>
</html>
