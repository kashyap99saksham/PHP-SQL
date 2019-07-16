<?php
    session_start();
    if(!isset($_SESSION['username']))
        header('location:alogin.php');
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>WELCOME TO ADMIN DASHBOARD</h1>
    </div>
    <div class="w3-padding-64">
      <a href="insert.php" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Insert student details</a>
      <a href="feedeposit.php" class="w3-button w3-black w3-block w3-hover-blue-white w3-padding-16">Fee Deposit</a>
      <a href="update.php" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Update student details</a>
      <a href="delete.php" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">Delete student details</a>
      <a href="../logout.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Logout</a>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>About School</h1>
      <img src="../images/admin_bg.gif" class="w3-margin w3-circle" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
</div>


</body>
</html>

