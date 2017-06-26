<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $shipping_price = "Cost ($): " . calculateShipping($weight, $distance);

    function calculateShipping($weight, $distance)
    {
        $price = ($distance / $weight) + 5;
        return $price;
    }
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
    <p><?php echo $shipping_price; ?></p>
</body>
</html>
