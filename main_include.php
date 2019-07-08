<?php
    include("include_file.php");    //IF FILE IS NOT LOACTED THEN IT GIVE ERROR BUT RUN FULL PAGE
    require("include_file.php");    //require GIVES ERROR IF FILE IS NOT LOCATED AND DOESNOT RUN WHOLE PAGE
    echo sum(2,4);
    echo name();
    echo printa('sak','sham');
?>