<html>
    <form action = 'cookie.php' align = 'center' method = 'post'>
        <input type = 'text' name = 'username'>
        <input type = 'password' name = 'password'>
        <input type = 'submit' name = 'submit'>
    </form>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $time = time() + 86400;
        setcookie("username",$uname,$time);
        setcookie("password",$pass,$time);
        echo $_COOKIE["username"];
        echo $_COOKIE["password"];
        // $time = time() - 86400;      //TIMEOUT 
        // setcookie("username",$uname,$time);
        // setcookie("password",$pass,$time);
    }

?>