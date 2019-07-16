<?php
    include('../dbconn.php');
    extract($_POST);
    $id = $_POST['sid'];
    $imgname = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname,"../dataimg/$imgname");
    $qry = "UPDATE `students` SET `name`= '$name',`rollno`='$rollno',`class`='$class',`address`='$address',`phoneno`='$pphone',`image`='$imgname' WHERE id = $id";
    $run = mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert("DATA UPDATED SUCCESSFULLY");
            window.location = "adashboard.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("DATA NOT UPDATED");
        </script>
        <?php
    }
?>