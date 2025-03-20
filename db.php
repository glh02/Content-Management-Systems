<?php
// 开启错误报告
error_reporting(E_ALL);
session_start();

// 数据库配置
$host = 'localhost';
$dbname = 'week7'; // 你的数据库名称
$username = 'root'; // 默认用户名是 'root'
$password = ''; // 默认没有密码

try {
    // 创建 PDO 对象连接 MySQL 数据库
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // 设置错误模式为异常模式
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("数据库连接失败：" . $e->getMessage());
}
?>
