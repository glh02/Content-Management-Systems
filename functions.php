<?php
function greetUser($name) {
    echo "<p>Hello, $name! Welcome to our PHP demo.</p>";
}

function generateList($items) {
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
?>
