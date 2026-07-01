<?php
include "db.php";

$message = "";

if(isset($_POST['register'])){

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirm = mysqli_real_escape_string($conn,$_POST['confirm']);
    $birthday = mysqli_real_escape_string($conn,$_POST['birthday']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);

    if($password != $confirm){

        $message = "<div class='error'>Password and Confirm Password are not the same.</div>";

    }else{

        $check = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

        if(mysqli_num_rows($check)>0){

            $message="<div class='error'>Username already exists.</div>";

        }else{

            $sql="INSERT INTO users(firstname,middlename,lastname,username,password,birthday,email,contact)

            VALUES('$firstname','$middlename','$lastname','$username','$password','$birthday','$email','$contact')";

            if(mysqli_query($conn,$sql)){

                $message="<div class='success'>Registration Successful!</div>";

            }else{

                $message="<div class='error'>Registration Failed.</div>";

            }

        }

    }

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="wrapper">

<div class="login-card">

<h1>Create Account</h1>

<p>Fill in your information below.</p>

<?= $message ?>

<form method="POST">

<input type="text" name="firstname" placeholder="First Name" required>

<input type="text" name="middlename" placeholder="Middle Name">

<input type="text" name="lastname" placeholder="Last Name" required>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<input type="password" name="confirm" placeholder="Confirm Password" required>

<input type="date" name="birthday" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="text" name="contact" placeholder="Contact Number" required>

<button type="submit" name="register">

Register

</button>

</form>

<div class="bottom">

Already have an account?

<a href="login.php">

Login

</a>

</div>

</div>

</div>

</body>

</html>