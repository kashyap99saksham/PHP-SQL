
<html>
    <form action = 'files.php' method = 'post' enctype = 'multipart/form-data'>
        <input type = 'file' name = 'pic'> 
        <input type ='submit' name='submit'>
    </form>
</html>
<?php
    if(isset($_POST['submit']))
    {
        print_r($_FILES['pic']);
        print_r($_FILES['pic']['name']);
        print_r($_FILES['pic']['size']);

    }
?>