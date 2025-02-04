<?php
// filepath: /C:/Users/stefa/Desktop/Git Hub/API Eshop/index.php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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