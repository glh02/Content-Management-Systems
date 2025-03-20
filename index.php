<?php
include 'header.php';
include 'functions.php';

echo "<div class='content'>";
greetUser("Visitor");

// 使用 if/else 语句
$hour = date("H");
if ($hour < 12) {
    echo "<p>Good morning!</p>";
} elseif ($hour < 18) {
    echo "<p>Good afternoon!</p>";
} else {
    echo "<p>Good evening!</p>";
}

// 使用循环（for, while, foreach）
echo "<h3>Numbers (For Loop):</h3>";
echo "<p>";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "</p>";

echo "<h3>Countdown (While Loop):</h3>";
$count = 5;
echo "<p>";
while ($count > 0) {
    echo "$count ";
    $count--;
}
echo "</p>";

$fruits = ["Apple", "Banana", "Orange", "Grapes"];
echo "<h3>Fruit List (Foreach Loop):</h3>";
generateList($fruits);

echo "</div>";

include 'footer.php';
?>
