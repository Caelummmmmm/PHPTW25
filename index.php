<?php
declare(strict_types=1);

// 1. Define the multidimensional array with 10 Grey's Anatomy characters
$students = [
    ["name" => "Meredith Grey", "age" => 45, "birthday" => "1978-06-08", "contact" => "09175550101", "image" => "https://images.unsplash.com/photo-1594744803329-e58b31de215f?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Alex Karev", "age" => 40, "birthday" => "1983-04-14", "contact" => "09175550102", "image" => "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Cristina Yang", "age" => 44, "birthday" => "1979-05-18", "contact" => "09175550103", "image" => "https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Derek Shepherd", "age" => 48, "birthday" => "1975-11-20", "contact" => "09175550104", "image" => "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Miranda Bailey", "age" => 50, "birthday" => "1973-09-21", "contact" => "09175550105", "image" => "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Richard Webber", "age" => 68, "birthday" => "1955-03-12", "contact" => "09175550106", "image" => "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Jackson Avery", "age" => 39, "birthday" => "1984-07-16", "contact" => "09175550107", "image" => "https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=150&auto=format&fit=crop&q=80"],
    ["name" => "April Kepner", "age" => 38, "birthday" => "1985-10-27", "contact" => "09175550108", "image" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Callie Torres", "age" => 43, "birthday" => "1980-11-15", "contact" => "09175550109", "image" => "https://images.unsplash.com/photo-1517841905240-472988babdf9?w=150&auto=format&fit=crop&q=80"],
    ["name" => "Arizona Robbins", "age" => 42, "birthday" => "1981-05-21", "contact" => "09175550110", "image" => "https://images.unsplash.com/photo-1554151228-14d9def656e4?w=150&auto=format&fit=crop&q=80"]
];

// 2. Sort the array alphabetically by the 'name' key using array sorting [cite: 311]
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