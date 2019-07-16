<?php
  session_start();
  if(isset($_SESSION['username']))
  {
    header('location:adashboard.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin login</h2>
  <form method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <!-- <div class="checkbox"> -->
      <!-- <label><input type="checkbox" name="remember"> Remember me</label> -->
    <!-- </div> -->
    <input type="submit"  name="submit">
  </form>
</div>


</body>
</html>
<?php
include('../dbconn.php');
    if(isset($_POST['submit']))
    {
        extract($_POST);
        // $username = $_POST['username'];
        // $password =  $_POST['password'];
        $qry = "SELECT * FROM admin WHERE name = '$username' AND Password = '$password'";
        $run = mysqli_query($conn,$qry);
        $row = mysqli_num_rows($run);
        if($row>0)
        {
          $_SESSION['username'] = $username;
          header('location:adashboard.php');
        }
        else
        {
          ?>
          <script>
            alert("Username and password are incorrect!!");
          </script>
          <?php
        }    
    }

?>
