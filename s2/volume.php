<?php
// 1. Cube
function calculateCubeVolume($s) {
    return pow($s, 3);
}

// 2. Right Rectangular Prism
function calculateRectPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

// 3. Cylinder / Prism
function calculateCylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

// 4. Pyramid / Cone
function calculateConeVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

// 5. Sphere
function calculateSphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}

// Test values
$side = 5;
$length = 6; $width = 4; $height_prism = 8;
$radius_cyl = 3; $height_cyl = 10;
$radius_cone = 3; $height_cone = 9;
$radius_sphere = 4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
        table { width: 80%; margin: auto; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ccc; padding: 12px; text-align: center; }
        th { background-color: #333; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Volume of Shapes Calculations</h2>
    <table>
        <thead>
            <tr>
                <th>Shape</th>
                <th>Assigned Values</th>
                <th>Formula</th>
                <th>Calculated Answer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Cube</strong></td>
                <td>s = <?php echo $side; ?></td>
                <td>v = s³</td>
                <td><?php echo round(calculateCubeVolume($side), 2); ?></td>
            </tr>
            <tr>
                <td><strong>Right Rectangular Prism</strong></td>
                <td>l = <?php echo $length; ?>, w = <?php echo $width; ?>, h = <?php echo $height_prism; ?></td>
                <td>v = l × w × h</td>
                <td><?php echo round(calculateRectPrismVolume($length, $width, $height_prism), 2); ?></td>
            </tr>
            <tr>
                <td><strong>Cylinder</strong></td>
                <td>r = <?php echo $radius_cyl; ?>, h = <?php echo $height_cyl; ?></td>
                <td>v = π × r² × h</td>
                <td><?php echo round(calculateCylinderVolume($radius_cyl, $height_cyl), 2); ?></td>
            </tr>
            <tr>
                <td><strong>Cone</strong></td>
                <td>r = <?php echo $radius_cone; ?>, h = <?php echo $height_cone; ?></td>
                <td>v = (1/3) × π × r² × h</td>
                <td><?php echo round(calculateConeVolume($radius_cone, $height_cone), 2); ?></td>
            </tr>
            <tr>
                <td><strong>Sphere</strong></td>
                <td>r = <?php echo $radius_sphere; ?></td>
                <td>v = (4/3) × π × r³</td>
                <td><?php echo round(calculateSphereVolume($radius_sphere), 2); ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
