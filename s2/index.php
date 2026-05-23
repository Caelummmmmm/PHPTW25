<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web-Based Student Resume</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #eceff1;
        margin: 0;
        padding: 20px;
    }

    .resume-container {
        max-width: 900px;
        margin: 0 auto;
        background-color: #ffffff;
        border: 1px solid #cfd8dc;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .header-section {
        display: flex;
        border-bottom: 2px solid #37474f;
        background: #f8f9fa;
    }

    .avatar-box {
        width: 30%;
        padding: 20px;
        text-align: center;
        border-right: 1px solid #cfd8dc;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar-box img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        border: 3px solid #37474f;
    }

    .info-box {
        width: 70%;
        padding: 20px;
    }

    .content-block {
        padding: 20px;
        border-bottom: 1px solid #eceff1;
    }

    .content-block:last-child {
        border-bottom: none;
    }

    h3 {
        color: #1a237e;
        border-left: 4px solid #1a237e;
        padding-left: 10px;
        margin-top: 0;
        text-transform: uppercase;
        font-size: 16px;
    }

    ul {
        margin: 5px 0 0 0;
        padding-left: 20px;
    }

    li {
        margin-bottom: 6px;
        color: #37474f;
    }
    </style>
</head>

<body>
    <div class="resume-container">
        <div class="header-section">
            <div class="avatar-box">
                <svg viewBox="0 0 24 24" width="120" height="120" fill="#37474f">
                </svg>
            </div>
            <div class="info-box">
                <?php require("personal.php");?>
            </div>
        </div>
        <div class="content-block">
            <?php include("objective.php"); ?>
        </div>
        <div class="content-block">
            <?php include("education.php"); ?>
        </div>
        <div class="content-block">
            <?php include("skills.php"); ?>
        </div>
        <div class="content-block">
            <?php include("affiliation.php"); ?>
        </div>
        <div class="content-block">
            <?php include("experience.php"); ?>
        </div>
    </div>
</body>

</html>