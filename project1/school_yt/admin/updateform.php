<?php
    include('../dbconn.php');
    $sid = $_GET['sid'];
    $qry = "SELECT * FROM students WHERE id = '$sid'";
    $run = mysqli_query($conn,$qry);
    $data = mysqli_fetch_assoc($run);
    
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Welcome to admin Dash</h2>
<!-- <p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p> -->

<div class="container">
  <form action = "updatedata.php" method = "post" enctype = "multipart/form-data">
    <div class="row">
        <div class="col-25">
        <label for="fname">Rollno</label>
        </div>
        <div class="col-75">
        <input style="height:40px; width:200px" type="number" id="fname" name="rollno" value = "<?php echo $data['rollno']?>">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="lname">Full Name</label>
        </div>
        <div class="col-75">
        <input type="text" id="lname" name="name" value = "<?php echo $data['name']?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="country">Standard</label>
        </div>
        <div class="col-75">
        <input type = 'number' id="country" name="class" value = "<?php echo $data['class']?>" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="subject">Address</label>
        </div>
        <div class="col-75">
        <input maxlength="255" type = "text" name="address" value = "<?php echo $data['address']?>" style="height:100px" required>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
        <label for="fname">Parents contact no</label>
        </div>
        <div class="col-75">
        <input style="height:40px; width:200px" type="number" id="fname" name="pphone" value = "<?php echo $data['phoneno']?>" required>
        </div>
    </div>
    <input type = "hidden" name = 'sid' value = "<?php echo $sid?>">
    <div class="row">
            <label for="fname">Image</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input type = "file" name = 'image' required>
        </div>
    <div class="row">
        <input type="submit" name= 'submit'>
    </div>
    
  </form>
</div>

</body>
</html>
