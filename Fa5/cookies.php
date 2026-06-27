<?php
$path = '/';
$action = $_POST['action'] ?? '';
function cookie($name) {
   return isset($_COOKIE[$name]) ? htmlspecialchars($_COOKIE[$name]) : '';
}
if ($action === 'set') {
   $now = time();
   setcookie('lab2_firstname', $_POST['firstname'], $now + 10, $path);
   setcookie('lab2_firstname_exp', $now + 10, $now + 10, $path);
   setcookie('lab2_middlename', $_POST['middlename'], $now + 20, $path);
   setcookie('lab2_middlename_exp', $now + 20, $now + 20, $path);
   setcookie('lab2_lastname', $_POST['lastname'], $now + 30, $path);
   setcookie('lab2_lastname_exp', $now + 30, $now + 30, $path);
   header("Location: $_SERVER[PHP_SELF]?set=1");
   exit;
}
if ($action === 'delete') {
   foreach (['lab2_firstname','lab2_firstname_exp','lab2_middlename','lab2_middlename_exp','lab2_lastname','lab2_lastname_exp'] as $c) {
       setcookie($c, '', time() - 3600, $path);
   }
   header("Location: $_SERVER[PHP_SELF]?deleted=1");
   exit;
}
$justSet = isset($_GET['set']);
$justDeleted = isset($_GET['deleted']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <style>
    body {
        font-family: Arial;
        background: #f0f2f5;
        max-width: 480px;
        margin: 40px auto;
        padding: 20px
    }

    .card {
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, .05)
    }

    h2 {
        text-align: center;
        margin: 0 0 20px
    }

    input {
        width: 100%;
        padding: 10px 14px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btns {
        display: flex;
        gap: 10px
    }

    button {
        flex: 1;
        padding: 12px;
        border: 0;
        border-radius: 4px;
        color: #fff;
        font-weight: bold;
        cursor: pointer
    }

    .set {
        background: #007bff
    }

    .del {
        background: #dc3545
    }

    .alert {
        padding: 10px;
        border-radius: 6px;
        text-align: center;
        margin-bottom: 15px
    }

    .success {
        background: #d4edda;
        color: #155724
    }

    .info {
        background: #d1ecf1;
        color: #0c5460
    }

    .row {
        padding: 12px;
        border: 1px solid #ccc;
        border-left: 5px solid #28a745;
        margin: 10px 0;
        border-radius: 6px;
        background: #e2f0d9
    }

    .exp {
        border-left-color: #6c757d;
        background: #e9ecef;
        opacity: .8
    }

    small {
        opacity: .7
    }

    code {
        background: #eee;
        padding: 2px 5px;
        border-radius: 4px
    }

    .count {
        font-size: .8rem;
        color: #555;
        margin-top: 5px
    }
    </style>
</head>

<body>
    <div class="card">
        <h2>Set Name Cookies</h2>
        <?php if ($justSet): ?>
        <div class="alert success">Cookies set successfully</div>
        <?php endif; ?>
        <?php if ($justDeleted): ?>
        <div class="alert info">Cookies deleted</div>
        <?php endif; ?>
        <form method="post">
            <input name="firstname" placeholder="First Name" required>
            <input name="middlename" placeholder="Middle Name">
            <input name="lastname" placeholder="Last Name" required>
            <div class="btns">
                <button class="set" name="action" value="set">Set Cookies</button>
                <button class="del" name="action" value="delete">Delete</button>
            </div>
        </form>
    </div>
    <div class="card">
        <h2>Cookie Status</h2>
        <div class="row" data-exp="<?= $_COOKIE['lab2_firstname_exp'] ?? 0 ?>">
            <b>First Name</b> <small>(10s)</small><br>
            Value: <code class="val"><?= cookie('lab2_firstname') ?: '—' ?></code>
            <div class="count"></div>
        </div>
        <div class="row" data-exp="<?= $_COOKIE['lab2_middlename_exp'] ?? 0 ?>">
            <b>Middle Name</b> <small>(20s)</small><br>
            Value: <code class="val"><?= cookie('lab2_middlename') ?: '—' ?></code>
            <div class="count"></div>
        </div>
        <div class="row" data-exp="<?= $_COOKIE['lab2_lastname_exp'] ?? 0 ?>">
            <b>Last Name</b> <small>(30s)</small><br>
            Value: <code class="val"><?= cookie('lab2_lastname') ?: '—' ?></code>
            <div class="count"></div>
        </div>
    </div>
    <script>
    function update() {
        const nowInSeconds = Math.floor(Date.now() / 1000);
        document.querySelectorAll('.row').forEach(row => {
            const expTimestamp = parseInt(row.dataset.exp);
            const box = row.querySelector('.count');
            const valBox = row.querySelector('.val');
            if (!expTimestamp || nowInSeconds >= expTimestamp) {
                box.textContent = 'Expired';
                valBox.textContent = '—'; 
                row.classList.add('exp');
            } else {
                const remaining = expTimestamp - nowInSeconds;
                box.textContent = `Expires in ${remaining}s`;
                row.classList.remove('exp');
            }
        });
    }
    setInterval(update, 200);
    update();
    </script>
</body>

</html>