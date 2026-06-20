<?php
declare(strict_types=1);

/**
 * Calculates arithmetic operations across three parameters.
 * @return array<string, float|int>
 */
function calculateThreeParameters(float $p1, float $p2, float $p3): array {
return [
'addition' => $p1 + $p2 + $p3,
'subtraction'=> $p1 - $p2 - $p3,
'multiplication' => $p1 * $p2 * $p3,
'division' => ($p2 != 0 && $p3 != 0) ? ($p1 / $p2 / $p3) : 0.0
];
}

$val1 = 25.0;
$val2 = 13.0;
$val3 = 6.0;

$results = calculateThreeParameters($val1, $val2, $val3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style>
table {
border-collapse: collapse;
width: 60%;
margin: 20px auto;
font-family: Arial, sans-serif;
}
td {
border: 2px double #333;
padding: 8px 12px;
text-align: center;
}
.header-row {
background-color: #ffffff;
}
.label-col {
text-align: left;
width: 40%;
}
</style>
</head>
<body>

<table>
<tr>
<td colspan="2" class="header-row">My Parameter values: <?= "$val1, $val2, $val3"; ?></td>
</tr>
<tr>
<td class="label-col">Addition</td>
<td><?= $results['addition']; ?></td>
</tr>
<tr>
<td class="label-col">Subtraction</td>
<td><?= $results['subtraction']; ?></td>
</tr>
<tr>
<td class="label-col">Multiplication</td>
<td><?= $results['multiplication']; ?></td>
</tr>
<tr>
<td class="label-col">Division</td>
<td><?= $results['division']; ?></td>
</tr>
</table>

</body>
</html>