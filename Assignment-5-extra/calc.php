<?php
$diameter = $_POST['d'];

echo 'Circumference: ';
echo round(M_PI * $diameter, 3);
echo '<br>';
echo 'Area: ';
echo round(M_PI * pow($diameter / 2, 2), 3);
?>