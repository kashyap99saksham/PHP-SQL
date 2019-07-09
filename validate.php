<?php
    $a_mail = 'saksham@gmail.com';
    $b_mail = 'saksham at gmail dot com';
    if(filter_var($a_mail,FILTER_VALIDATE_EMAIL))
    {
        echo $a_mail . " IS VALID";
    }
    else
    echo  $a_mail . " IS NOT VALID";
    
    if(filter_var($b_mail,FILTER_VALIDATE_EMAIL))
    {
        echo $a_mail . " IS VALID";
    }
    echo  $b_mail . " IS NOT VALID";

?>