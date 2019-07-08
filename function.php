<?php
    //IN PHP , NO NEED TO WRITE RETURN TYPE 
    //WE CANNOT RETURN MORE THAN ONE VALUE IN FUNCTION
    function sum($a,$b)
    {
        return $a+$b; 
    }
    echo sum(8,5);
    function name()
    {
        $user = "saksham";
        return $user;
    }   
    function printa($p,$q)
    {
        echo $p . $q;
    }
?>

<html>
    <head>
    </head>
   <?php
        echo sum(4,5);
   ?>

    <h1> 
        <?php
            echo "Hello " . name();
        ?>
    </h1>
    <?php
        printa("sak","sham ");
        printa("adi","ti");
    ?>
</html>
