<?php
$firstname = $middlename = $lastname = $dob = $address = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $firstname = htmlspecialchars($_POST['firstname']);
 $middlename = htmlspecialchars($_POST['middlename']);
 $lastname = htmlspecialchars($_POST['lastname']);
 $dob = htmlspecialchars($_POST['dob']);
 $address = htmlspecialchars($_POST['address']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Personal Information (POST)</title>
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
        margin-bottom: 20px;
    }

    h2 {
        margin-top: 0;
        color: #333;
        text-align: center;
    }

    label {
        display: block;
        margin: 10px 0 5px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="date"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        margin-top: 15px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }

    .result {
        background: #e9ecef;
        padding: 15px;
        border-radius: 8px;
        border-left: 5px solid #28a745;
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Information Form </h2>
        <form action="post.php" method="post">
            <label>First Name:</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" required>
            <label>Middle Name:</label>
            <input type="text" name="middlename" value="<?php echo $middlename; ?>">
            <label>Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
            <label>Date of Birth:</label>
            <input type="date" name="dob" value="<?php echo $dob; ?>" required>
            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $address; ?>" required>
            <button type="submit">Submit Data</button>
        </form>
    </div>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="result">
        <h3>Personal Information:</h3>
        <p><strong>First Name:</strong> <?php echo $firstname; ?></p>
        <p><strong>Middle Name:</strong> <?php echo $middlename; ?></p>
        <p><strong>Last Name:</strong> <?php echo $lastname; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
    </div>
    <?php endif; ?>
</body>

</html>