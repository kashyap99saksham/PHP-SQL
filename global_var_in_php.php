<?php
    $name = "saksham";      //LOCAL VARIABLE
    function print_name()
    {
        global $name;   //IT CANNOT ACCESS NAME directly so make it global
        echo $name;      
    }
    print_name();
?>