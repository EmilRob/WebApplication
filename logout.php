/*
		Emil Robertson
		1500165426
		Web Applications
*/
<?php

    // Initialize the session

    session_start();

     

    // Unset all of the session variables

    $_SESSION = array();

     

    // Destroy the session.

    session_destroy();

     

    // Redirect to login page

    header("location: login.php");

    exit;

?>

