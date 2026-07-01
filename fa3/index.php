<?php
declare(strict_types=1);

$students = [
["name" => "Meredith Grey", "age" => 45, "birthday" => "1978-06-08", "contact" => "09175550101", "image" => "https://i.pinimg.com/736x/52/4e/07/524e07d3ebc8446ff44e4cd848c3078b.jpg"],
["name" => "Alex Karev", "age" => 40, "birthday" => "1983-04-14", "contact" => "09175550102", "image" => "https://i.pinimg.com/1200x/79/0f/72/790f72a76293fa48864ed0e95508d29a.jpg"],
["name" => "Cristina Yang", "age" => 44, "birthday" => "1979-05-18", "contact" => "09175550103", "image" => "https://i.pinimg.com/736x/7f/b1/54/7fb154b92dda9964a5dcd0e1294aea4f.jpg"],
["name" => "Derek Shepherd", "age" => 48, "birthday" => "1975-11-20", "contact" => "09175550104", "image" => "http://i.pinimg.com/736x/7f/63/19/7f6319428b025d9de060a9cb56da5b9e.jpg"],
["name" => "Miranda Bailey", "age" => 50, "birthday" => "1973-09-21", "contact" => "09175550105", "image" => "https://i.pinimg.com/1200x/02/7a/1f/027a1f63aa95b9b95906c801fa45bb7d.jpg"],
["name" => "Richard Webber", "age" => 68, "birthday" => "1955-03-12", "contact" => "09175550106", "image" => "https://i.pinimg.com/1200x/8d/a4/60/8da460baf0248d2a104678da73badfc6.jpg"],
["name" => "Jackson Avery", "age" => 39, "birthday" => "1984-07-16", "contact" => "09175550107", "image" => "https://i.pinimg.com/1200x/dc/fe/46/dcfe46c9cb631d70ae85d25de27ccaee.jpg"],
["name" => "April Kepner", "age" => 38, "birthday" => "1985-10-27", "contact" => "09175550108", "image" => "https://i.pinimg.com/736x/d7/fc/fd/d7fcfdb7ad961edf2e3576ec25fcfafc.jpg"],
["name" => "Callie Torres", "age" => 43, "birthday" => "1980-11-15", "contact" => "09175550109", "image" => "https://i.pinimg.com/736x/cd/25/70/cd2570663bc14822a1a85f8bfcde9545.jpg"],
["name" => "Arizona Robbins", "age" => 42, "birthday" => "1981-05-21", "contact" => "09175550110", "image" => "https://i.pinimg.com/1200x/f8/23/8b/f8238bed3cb8c33ad6e6c8212bf42411.jpg"]
];

usort($students, function (array $a, array $b): int {
return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grey's Anatomy Staff Directory</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f4f6f9;
padding: 20px;
display: flex;
justify-content: center;
}
table {
border-collapse: collapse;
width: 80%;
background-color: #ffffff;
box-shadow: 0 4px 8px rgba(0,0,0,0.1);
border: 2px solid #333;
}
th, td {
border: 1px solid #bbb;
padding: 12px;
text-align: center;
vertical-align: middle;
}
th {
background-color: #f2f2f2;
font-weight: bold;
}
.student-img {
width: 60px;
height: 60px;
object-fit: cover;
border-radius: 50%;
border: 1px solid #ddd;
}
</style>
</head>
<body>

<table>
<thead>
<tr>
<th>no</th>
<th>name</th>
<th>image</th>
<th>age</th>
<th>birthday</th>
<th>contact number</th>
</tr>
</thead>
<tbody>
<?php 
$counter = 1;
foreach ($students as $student): 
?>
<tr>
<td><?= $counter++; ?></td>
<td><?= htmlspecialchars($student['name']); ?></td>
<td>
<img src="<?= htmlspecialchars($student['image']); ?>" alt="Profile" class="student-img">
</td>
<td><?= $student['age']; ?></td>
<td><?= $student['birthday']; ?></td>
<td><?= htmlspecialchars($student['contact']); ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

</body>
</html>