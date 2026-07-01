<?php
session_start();
if (isset($_POST['send_colors'])) {
 $_SESSION['fav_colors'] = [
 'Color 1' => htmlspecialchars($_POST['c1']),
 'Color 2' => htmlspecialchars($_POST['c2']),
 'Color 3' => htmlspecialchars($_POST['c3']),
 'Color 4' => htmlspecialchars($_POST['c4']),
 'Color 5' => htmlspecialchars($_POST['c5'])
 ];
 header("Location: ResultColors.php");
 exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Enter Colors</title>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f0f2f5;
margin: 40px auto;
max-width: 450px;
padding: 20px;
}

.card {
background: white;
padding: 25px;
border-radius: 8px;
border: 1px solid #ccc;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

h2 {
margin-top: 0;
color: #333;
text-align: center;
border-bottom: 2px solid #5c6bc0;
padding-bottom: 10px;
}

label {
display: block;
margin: 14px 0 5px;
font-weight: bold;
color: #4b5563;
}

input[type="text"] {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
background-color: #f9fafb;
}

input[type="text"]:focus {
outline: none;
border-color: #5c6bc0;
background-color: #fff;
}

button {
width: 100%;
padding: 12px;
background-color: #5c6bc0;
color: white;
border: none;
border-radius: 4px;
margin-top: 20px;
font-size: 15px;
font-weight: bold;
cursor: pointer;
}

button:hover {
background-color: #3f51b5;
}
</style>
</head>

<body>
<div class="card">
<h2>Favorite Colors Input</h2>
<form action="FavoriteColor.php" method="post">
<label>Favorite Color 1:</label>
<input type="text" name="c1" placeholder="e.g., Red or #ff0000" required>
<label>Favorite Color 2:</label>
<input type="text" name="c2" placeholder="e.g., Blue or #0000ff" required>
<label>Favorite Color 3:</label>
<input type="text" name="c3" placeholder="e.g., Green or #008000" required>
<label>Favorite Color 4:</label>
<input type="text" name="c4" placeholder="e.g., Orange or #ffa500" required>
<label>Favorite Color 5:</label>
<input type="text" name="c5" placeholder="e.g., Purple or #800080" required>
<button type="submit" name="send_colors">Send Colors to Session</button>
</form>
</div>
</body>

</html>