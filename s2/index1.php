<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<h1>Volume of Different Shapes</h1>

<?php

function cube($side)
{
    return $side * $side * $side;
}

function rectangularPrism($length,$width,$height)
{
    return $length * $width * $height;
}

function cylinder($radius,$height)
{
    return 3.1416 * $radius * $radius * $height;
}

function cone($radius,$height)
{
    return (1/3) * 3.1416 * $radius * $radius * $height;
}

function sphere($radius)
{
    return (4/3) * 3.1416 * $radius * $radius * $radius;
}

?>

<div class="box">
    <h2>Cube</h2>
    <p>Volume: <?php echo cube(5); ?></p>
</div>

<div class="box">
    <h2>Right Rectangular Prism</h2>
    <p>Volume: <?php echo rectangularPrism(5,4,3); ?></p>
</div>

<div class="box">
    <h2>Cylinder</h2>
    <p>Volume: <?php echo cylinder(4,6); ?></p>
</div>

<div class="box">
    <h2>Cone</h2>
    <p>Volume: <?php echo cone(4,6); ?></p>
</div>

<div class="box">
    <h2>Sphere</h2>
    <p>Volume: <?php echo sphere(5); ?></p>
</div>

</body>
</html>