<?php
    /*in c/c++ 
        int roll[10];
        roll[0] = 1;
    */
    //IN PHP ARRAY ARE NOT STATIC       [key=value] concept 
    $arr = array();
    $arr[0] = 1;        //[0] is a key
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = 4;
    $arr['roll1'] = 01;         //roll1 is a key and 01 is value
    $arr['name'] = 'saksham';   //name is a key and saksham is value
    echo $arr['name']."<br>";
    echo "<pre>";    //it print in a proper manner
    print_r ($arr);     //print_r is used to print 2d || we cannot print $arr directly
    echo "</pre>";
    
    $barry = array(1,2,3,4,5,6,7,8);        //here all key are start from 0 by default
    echo "<pre>";    
    print_r ($barry);
    echo "</pre>";

    $carry  = array();
    $carry[10] = 1;
    $carry[] = 2;       //it will automatically assign from 11
    print_r($carry); 

echo "<br>";
    //  ANOTHER WAY TO DECLARE ARRAY
    $narry = array('name'=>'saksham','age'=>20);
    print_r($narry);

    //CONCEPT OF 2D ARRAY
    $arr2d[0][0] = 1;
    $arr2d[0][1] = 1;
    $arr2d[0][2] = 1;
    $arr2d[0][3] = 1;
    $arr2d[0][4] = 1;
    $arr2d[0][5] = 1;
    echo "<pre>";
    print_r($arr2d);
    echo "</pre>";

    $arr22 = array();
    $arr22[0] = array(1,2,3,4,5,6,7,8,9,10);
    $arr22[1] = array(1,2,3,4,5,6,7,8,9,10);
    echo "<pre>";
    print_r($arr22);
    echo "</pre>";

?>