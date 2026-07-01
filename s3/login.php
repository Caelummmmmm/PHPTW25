<?php
include "db.php";

$message = "";

if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit();
}

$username = "";
$password = "";

if(isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];
}

if(isset($_COOKIE['password'])){
    $password = $_COOKIE['password'];
}

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(isset($_POST['remember'])){
        setcookie("username",$username,time()+86400*30,"/");
        setcookie("password",$password,time()+86400*30,"/");
    }else{
        setcookie("username","",time()-3600,"/");
        setcookie("password","",time()-3600,"/");
    }

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['username']=$username;

        header("Location: home.php");
        exit();

    }else{
        $message = "<div class='error'>Incorrect Username or Password</div>";
    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

<div class="login-card">

<h1>Welcome Back!!!</h1>

<p>Please login to continue.</p>

<?= $message ?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
value="<?= htmlspecialchars($username) ?>"
required>

<input
type="password"
name="password"
placeholder="Password"
value="<?= htmlspecialchars($password) ?>"
required>

<div class="remember">

<input type="checkbox" name="remember">

<label>Remember Me</label>

</div>

<button name="login">
Login
</button>

</form>

<div class="bottom">

Don't have an account?

<a href="register.php">

Register

</a>

</div>

</div>

</div>

</body>

</html>