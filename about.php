<?php
include 'header.php';
include 'functions.php';

echo "<div class='content'>";
echo "<h2>About This Demo</h2>";
echo "<p>This PHP website demonstrates basic PHP functionalities, including:</p>";

$features = ["Echoing HTML", "If/Else Statements", "Loops (For, While, Foreach)", "Functions with Parameters", "Include Files"];
generateList($features);

echo "</div>";

include 'footer.php';
?>
