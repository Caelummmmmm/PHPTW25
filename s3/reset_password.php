<?php
include "db.php";

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$message = "";

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

if(isset($_POST['reset'])){

    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];

    if($current != $user['password']){

        $message = "<div class='error'>Current password is not the same with the old password.</div>";

    }elseif($new != $confirm){

        $message = "<div class='error'>New password and Re-enter password should be the same.</div>";

    }else{

        mysqli_query($conn,"UPDATE users SET password='$new' WHERE username='$username'");

        $message = "<div class='success'>Password Updated Successfully!</div>";
    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Reset Password</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

<div class="login-card">

<h1>Reset Password</h1>

<p>Change your account password.</p>

<?= $message; ?>

<form method="POST">

<input
type="password"
name="current"
placeholder="Current Password"
required>

<input
type="password"
name="new"
placeholder="New Password"
required>

<input
type="password"
name="confirm"
placeholder="Confirm New Password"
required>

<button name="reset">

Update Password

</button>

</form>

<div class="bottom">

<a href="home.php">

⬅ Back to Home

</a>

</div>

</div>

</div>

</body>

</html>