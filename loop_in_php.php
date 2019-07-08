<?php
    //FOR LOOP AND WHILE LOOP CONCEPT ARE SAME AS C AND C++
    // HERE IS FOREACH LOOP CONCEPT IS NEW IN PHP
    $arr = array(1,2,3,4,5,6,7,8,9);           //bydefault it starts from 0 to ..........
    foreach($arr as $val)    // value is in $val
    {
        echo $val."<br>";
    }
    $arr = array('name'=>'saksham','age'=>20,3,4,5,6,7,8,9);           //bydefault it starts from 0 to ..........
    foreach($arr as $key1=>$val1)    // key is kept in $key and value is in $val
    {
        echo $key1 ."=>".$val1."<br>";
    }
?>