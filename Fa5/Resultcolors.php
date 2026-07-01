<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Display Colors</title>
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
margin-bottom: 20px;
}

.color-block {
padding: 15px;
margin: 10px 0;
border-radius: 6px;
font-weight: bold;
color: #ffffff;
text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
display: flex;
justify-content: space-between;
align-items: center;
border: 1px solid rgba(0, 0, 0, 0.1);
}

.link-container {
text-align: center;
margin-top: 20px;
}

.nav-link {
color: #5c6bc0;
text-decoration: none;
font-weight: bold;
}

.nav-link:hover {
text-decoration: underline;
}

.error-msg {
color: #721c24;
background-color: #f8d7da;
padding: 12px;
border-radius: 4px;
text-align: center;
}
</style>
</head>

<body>
<div class="card">
<h2>Your Pallete</h2>
<?php
 if (isset($_SESSION['fav_colors']) && is_array($_SESSION['fav_colors'])) {
 foreach ($_SESSION['fav_colors'] as $label => $color_value) {
 $clean_color = htmlspecialchars(trim($color_value));
 echo "<div class='color-block' style='background-color: " . $clean_color . ";'>";
 echo "<span>" . htmlspecialchars($label) . "</span>";
 echo "<span>" . $clean_color . "</span>";
 echo "</div>";
 }
 } else {
 echo "<p class='error-msg'>No color data configuration found in session.</p>";
 }
 ?>
<div class="link-container">
<a href="FavoriteColor.php" class="nav-link">&larr; Change Colors</a>
</div>
</div>
</body>

</html>