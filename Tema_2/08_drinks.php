
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Arrays</title>
</head>
<body>

<?php
echo "Choose one of these ", count($drinks) ," drinks:"

$drinks = array("Coffee","Tea","Water","Beer","Wine","Soft drink");
echo "<h1>DRINKS</h1>";
echo "<ul>";
foreach ($drinks as $d) {
echo "<li>", $d, "</li>";
}
echo "</ul>";



?>
</body>
</html>
