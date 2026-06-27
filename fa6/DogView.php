<?php
include 'db.php';
$result=$conn->query("SELECT * FROM dogs");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dog View</title>
    <style>
    body {
        font-family: Arial;
        background: #f4f4f4;
    }

    table {
        width: 90%;
        margin: auto;
        margin-top: 30px;
        border-collapse: collapse;
        background: white;
    }

    th,
    td {
        padding: 12px;
        border: 1px solid black;
        text-align: center;
    }

    th {
        background: #4CAF50;
        color: white;
    }
    </style>
</head>

<body>
    <h2 align="center">Dog Records</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
        <?php
while($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['breed']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['address']."</td>";
echo "<td>".$row['color']."</td>";
echo "<td>".$row['height']."</td>";
echo "<td>".$row['weight']."</td>";
echo "</tr>";
}
?>
    </table>
</body>

</html>