<?php
session_start();
$langue=$_SESSION['langue'];

$_SESSION = array();
session_destroy();

setcookie('login', '');
setcookie('pass_hache', '');
session_start();
$_SESSION['langue']=$langue;
header('Location: ../index.php')
?>
