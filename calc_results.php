<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $solution = ($weight / 20) + ($distance / 20);
    $returnString = "Cost ($): " . $solution;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ship Yo' Stuff</title>
</head>
<body>
    <h1>Shipping Calculator</h1>
    <p>Weight (kg): <?php echo $weight; ?></p>
    <p>Distance (km): <?php echo $distance; ?></p>
    <p><?php echo $returnString; ?></p>
</body>
</html>
