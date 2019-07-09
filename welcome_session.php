<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        echo 'welcome' . $_SESSION["user"] ;
    }
    else
        echo 'you are not logged in';
        // header('location:session.php');

?>
<html>
    <a href = 'logout_session.php'> LOGOUT </a> 
</html>