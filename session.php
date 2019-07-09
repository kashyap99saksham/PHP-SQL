<?php
    session_start();
    if(isset($_SESSION["user"]))
    {
        echo "already logged in";
        exit();
    }   

?>
<html>
    <form align = 'center' method = 'post'>
        <input type = 'text' name = 'username'>
        <input type = 'password' name = 'password'>
        <input type = 'submit' name = 'submit'>
    </form>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $_SESSION["user"] = $_POST['username'];
        header('location:welcome_session.php');
    }
?>