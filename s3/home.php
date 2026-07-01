<?php

include "db.php";

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$username=$_SESSION['username'];

$sql="SELECT * FROM users WHERE username='$username'";

$result=mysqli_query($conn,$sql);

$user=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

<div class="profile-card">

<div class="avatar">

?

</div>

<h2>

<?= $user['firstname']." ".$user['lastname']; ?>

</h2>

<span>@<?= $user['username']; ?></span>

<div class="details">

<p>

<strong>Email</strong><br>

<?= $user['email']; ?>

</p>

<p>

<strong>Birthday</strong><br>

<?= $user['birthday']; ?>

</p>

<p>

<strong>Contact</strong><br>

<?= $user['contact']; ?>

</p>

</div>

<div class="buttons">

<a href="reset_password.php">

<button>

Reset Password

</button>

</a>

<a href="logout.php">

<button class="logout">

Logout

</button>

</a>

</div>

</div>

</div>

</body>

</html>