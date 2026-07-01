<?php

include "db.php";

session_unset();

session_destroy();

setcookie("username","",time()-3600,"/");
setcookie("password","",time()-3600,"/");

header("Location: login.php");

exit();

?>