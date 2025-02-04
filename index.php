<?php
$directory = '.';
$files = scandir($directory);

echo "<h1>List of PHP files:</h1>";
echo "<ul>";
foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
        echo "<li>$file</li>";
    }
}
echo "</ul>";
?>