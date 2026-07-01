<?php
declare(strict_types=1);

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sum = array_sum($numbers);

$difference = $numbers[0];
$product = $numbers[0];
$quotient = (float)$numbers[0];

$arrLength = count($numbers);
for ($i = 1; $i < $arrLength; $i++) {
$difference -= $numbers[$i];
$product *= $numbers[$i];

if ($numbers[$i] !== 0) {
$quotient /= $numbers[$i];
}
}

$arrayListString = implode(", ", $numbers);
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
th, td {
border: 2px double #333;
padding: 8px 12px;
text-align: center;
}
.header-row {
background-color: #ffffff;
font-weight: normal;
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
<td colspan="2" class="header-row">Array list: <?= $arrayListString; ?></td>
</tr>
<tr>
<td class="label-col">Addition</td>
<td><?= $sum; ?></td>
</tr>
<tr>
<td class="label-col">Subtraction</td>
<td><?= $difference; ?></td>
</tr>
<tr>
<td class="label-col">Multiplication</td>
<td><?= $product; ?></td>
</tr>
<tr>
<td class="label-col">Division</td>
<td><?= $quotient; ?></td>
</tr>
</table>

</body>
</html>