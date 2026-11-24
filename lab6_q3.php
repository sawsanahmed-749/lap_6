
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 6;
$width = 5;

$area = calculateArea($length, $width);

echo "<b>The area of a rectangle with a width of $length and $width is $area</b>";
?>

</body>
</html>
