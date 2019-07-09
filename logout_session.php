<?php
// UNSET AND SESSION_DESTROY BOTH ARE SAME BUT IN UNSET WE HAVE TO CHECK SESSION NAME
    session_start();
    session_destroy();
    unset($_SESSION['user']);   
    header("location:session.php");
?>