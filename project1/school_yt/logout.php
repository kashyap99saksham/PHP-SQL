<?php
    session_start();
    // $expire = time()+7;
    // $time = time();
    // if($time>$expire)
    session_destroy();
    header('location:admin/alogin.php');
    // }
?>

