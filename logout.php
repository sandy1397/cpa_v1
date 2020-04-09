<?php
// Initialize the session
session_start();
require_once "config.php";
 
// Unset all of the session variables

mysqli_query($link,"update users set lin=0");
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page

header("location: home.php");
exit;
?>