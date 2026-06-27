<?php
include 'db.php';
if(isset($_POST['save'])){
$name=$_POST['name'];
$breed=$_POST['breed'];
$age=$_POST['age'];
$address=$_POST['address'];
$color=$_POST['color'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$sql="INSERT INTO dogs(name,breed,age,address,color,height,weight)
VALUES('$name','$breed','$age','$address','$color','$height','$weight')";
if($conn->query($sql)){
echo "<script>alert('Dog Information Saved!');</script>";
}else{
echo "Error: " . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dog Register</title>
    <style>
    body{
   margin:0;
   padding:0;
   font-family:Arial, Helvetica, sans-serif;
   background:#eef2f7;
}
.container{
   width:380px;
   margin:50px auto;
   background:#fff;
   padding:30px;
   border-radius:15px;
   box-shadow:0 8px 20px rgba(0,0,0,.15);
}
h2{
   text-align:center;
   color:#2c3e50;
   margin-bottom:20px;
}
label{
   font-size:14px;
   font-weight:bold;
   color:#555;
}
input{
   width:100%;
   padding:12px;
   margin:8px 0 15px;
   border:1px solid #ccc;
   border-radius:8px;
   box-sizing:border-box;
   font-size:14px;
   transition:.3s;
}
input:focus{
   outline:none;
   border-color:#4CAF50;
   box-shadow:0 0 5px rgba(76,175,80,.4);
}
button{
   width:100%;
   padding:12px;
   border:none;
   border-radius:8px;
   background:#4CAF50;
   color:white;
   font-size:16px;
   cursor:pointer;
   transition:.3s;
}
button:hover{
   background:#388e3c;
}
.link{
   text-align:center;
   margin-top:15px;
}
.link a{
   color:#4CAF50;
   text-decoration:none;
   font-weight:bold;
}
.link a:hover{
   text-decoration:underline;
}
    </style>
</head>

<body>
    <div class="container">
        <h2>Dog Information</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="breed" placeholder="Breed" required>
            <input type="text" name="age" placeholder="Age" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="color" placeholder="Color" required>
            <input type="text" name="height" placeholder="Height" required>
            <input type="text" name="weight" placeholder="Weight" required>
            <button name="save">Save</button>
        </form>
        <br>
        <a href="DogView.php">View Dogs</a>
    </div>
</body>

</html>