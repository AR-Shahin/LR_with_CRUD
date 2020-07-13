<?php
session_start();
session_destroy();
//ob_start();
session_start();
$_SESSION['logout-txt'] = 1;
header("location:../index.php");

?>