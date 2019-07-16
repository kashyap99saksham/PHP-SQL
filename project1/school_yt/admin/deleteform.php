<?php
    include("../dbconn.php");
    $id = $_GET['sid'];
    $qry = "DELETE FROM `students` WHERE id = '$id'";
    $run = mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
            alert("Information Deleted!!");
            window.location = "adashboard.php";
        </script>
        <?php
    }
    else
        echo "Not deleted";
?>