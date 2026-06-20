<?php

// Set cookies BEFORE any HTML output

$action = isset($_POST['action']) ? $_POST['action'] : '';

// Track values manually for the current request to fix the instant-display bug

$c_firstname = isset($_COOKIE['firstname']) ? htmlspecialchars($_COOKIE['firstname']) : null;

$c_middlename = isset($_COOKIE['middlename']) ? htmlspecialchars($_COOKIE['middlename']) : null;

$c_lastname = isset($_COOKIE['lastname']) ? htmlspecialchars($_COOKIE['lastname']) : null;

if ($action === 'set') {

$firstname= isset($_POST['firstname'])? $_POST['firstname']: '';

$middlename = isset($_POST['middlename']) ? $_POST['middlename'] : '';

$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';

// Set cookie headers for the browser

setcookie('firstname',$firstname,time() + 10, '/');

setcookie('middlename', $middlename, time() + 20, '/');

setcookie('lastname', $lastname, time() + 30, '/');

// Force the current page execution to see them immediately

header('Location: ' . $_SERVER['PHP_SELF'] . '?set=1');

exit();

}

if ($action === 'delete') {

setcookie('firstname','', time() - 3600, '/');

setcookie('middlename', '', time() - 3600, '/');

setcookie('lastname', '', time() - 3600, '/');

header('Location: ' . $_SERVER['PHP_SELF'] . '?deleted=1');

exit();

}

$justSet = isset($_GET['set']);

$justDeleted = isset($_GET['deleted']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cookies – Activity 2</title>
<style>
body {

font-family: Arial, sans-serif;

background-color: #f0f2f5;

margin: 40px auto;

max-width: 480px;

padding: 20px;

}

.card {

background: white;

padding: 25px;

border-radius: 8px;

border: 1px solid #ccc;

margin-bottom: 20px;

box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);

}

h2 {

margin-top: 0;

color: #333;

text-align: center;

margin-bottom: 20px;

}

.form-group {

margin-bottom: 15px;

}

label {

display: block;

margin-bottom: 5px;

font-weight: bold;

color: #4b5563;

}

label small {

font-weight: normal;

color: #718096;

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

border-color: #007bff;

background-color: #fff;

}

.two-btns {

display: flex;

gap: 10px;

margin-top: 20px;

}

button {

flex: 1;

padding: 12px;

font-size: 15px;

font-weight: bold;

border: none;

border-radius: 4px;

cursor: pointer;

}

.btn-submit {

background-color: #007bff;

color: white;

}

.btn-submit:hover {

background-color: #0056b3;

}

.btn-delete {

background-color: #dc3545;

color: white;

}

.btn-delete:hover {

background-color: #bd2130;

}

.alert-banner {

padding: 12px;

border-radius: 6px;

margin-bottom: 18px;

font-size: 0.9rem;

text-align: center;

}

.alert-success {

background-color: #d4edda;

border: 1px solid #c3e6cb;

color: #155724;

}

.alert-info {

background-color: #d1ecf1;

border: 1px solid #bee5eb;

color: #0c5460;

}

#countdown-box {

font-size: 0.85rem;

margin-top: 6px;

font-weight: bold;

}

.cookie-row {

display: flex;

justify-content: space-between;

align-items: center;

padding: 12px;

margin: 10px 0;

border-radius: 6px;

font-size: 0.95rem;

border: 1px solid #ccc;

border-left: 5px solid;

}

.status-active {

background-color: #e2f0d9;

border-color: #bcd6ad;

border-left-color: #28a745;

color: #2b5115;

opacity: 1;

}

.status-expired {

background-color: #e9ecef;

border-color: #ced4da;

border-left-color: #6c757d;

color: #495057;

opacity: 0.75;

}

.badge {

padding: 2px 8px;

border-radius: 12px;

font-size: 0.75rem;

font-weight: bold;

margin-left: 6px;

display: inline-block;

}

.badge-active {
background-color: #28a745;
color: white;
}

.badge-expired {
background-color: #6c757d;
color: white;
}

.c-expires {
font-size: 0.78rem;
font-style: italic;
opacity: 0.8;
}
</style>
</head>

<body>
<div class="card">
<h2>Set Name Cookies</h2>
<?php if ($justSet): ?>
<div class="alert-banner alert-success">

✓ Cookies set successfully!
<div id="countdown-box">Monitoring intervals...</div>
</div>
<?php endif; ?>
<?php if ($justDeleted): ?>
<div class="alert-banner alert-info">All cookies have been deleted.</div>
<?php endif; ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<input type="hidden" name="action" value="set">
<div class="form-group">
<label for="firstname">First Name <small>(cookie: 10 seconds)</small></label>
<input type="text" id="firstname" name="firstname" value="<?php echo $c_firstname ?? ''; ?>"
placeholder="e.g. Juan">
</div>
<div class="form-group">
<label for="middlename">Middle Name <small>(cookie: 20 seconds)</small></label>
<input type="text" id="middlename" name="middlename" value="<?php echo $c_middlename ?? ''; ?>"
placeholder="e.g. Santos">
</div>
<div class="form-group">
<label for="lastname">Last Name <small>(cookie: 30 seconds)</small></label>
<input type="text" id="lastname" name="lastname" value="<?php echo $c_lastname ?? ''; ?>"
placeholder="e.g. Dela Cruz">
</div>
<div class="two-btns">
<button type="submit" class="btn-submit">Set Cookies</button>
<button type="submit" form="delete-form" class="btn-delete">Delete All Cookies</button>
</div>
</form>
<form id="delete-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<input type="hidden" name="action" value="delete">
</form>
</div>
<div class="card">
<h2>Current Cookie Status</h2>
<?php

$cookies = [

'firstname'=> ['label' => 'First Name', 'expires' => '10 seconds', 'value' => $c_firstname],

'middlename' => ['label' => 'Middle Name', 'expires' => '20 seconds', 'value' => $c_middlename],

'lastname' => ['label' => 'Last Name', 'expires' => '30 seconds', 'value' => $c_lastname],

];

foreach ($cookies as $key => $info):

$isSet= $info['value'] !== null && $info['value'] !== '';

$rowClass = $isSet ? 'status-active' : 'status-expired';

$badge= $isSet ? '<span class="badge badge-active">Active</span>' : '<span class="badge badge-expired">Not set / Expired</span>';

?>
<div class="cookie-row <?php echo $rowClass; ?>">
<div>
<strong><?php echo $info['label']; ?></strong><?php echo $badge; ?>
<div style="margin-top: 4px; font-size: 0.9rem;">

Value: <code><?php echo $isSet ? $info['value'] : '—'; ?></code>
</div>
</div>
<div class="c-expires">
<?php echo $isSet ? 'Expires: ' . $info['expires'] : 'No cookie'; ?>
</div>
</div>
<?php endforeach; ?>
</div>
<?php if ($justSet): ?>
<script>
var refreshTimes = [11000, 21000, 31000];

var countdownEl = document.getElementById('countdown-box');

var start = Date.now();

function updateCountdown() {

var elapsed = Math.floor((Date.now() - start) / 1000);

var next = refreshTimes.find(function(t) {
return t / 1000 > elapsed;
});

if (next !== undefined) {

var remaining = Math.ceil(next / 1000 - elapsed);

countdownEl.textContent = 'Auto-refresh in ' + remaining + 's to show cookie expiry...';

setTimeout(updateCountdown, 500);

} else {

countdownEl.textContent = 'Done refreshing.';

}

}

updateCountdown();

refreshTimes.forEach(function(delay) {

setTimeout(function() {
location.reload();
}, delay);

});
</script>
<?php endif; ?>
</body>

</html>