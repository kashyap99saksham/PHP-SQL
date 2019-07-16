<!DOCTYPE html>
<html lang="en">
<head>
<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 16px;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2
  }
  
  </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <h2>Update student Details</h2>
  <form class="form-inline" method="post">
    <div class="form-group">
      <label for="email">Student Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">class:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter Class" name="class">
    </div>
    <input type="submit" class="btn btn-default" name = 'submit'> 
  </form>
</div>

</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('../dbconn.php');
        extract($_POST);
        $qry = "SELECT * FROM students WHERE name like '%$name%' AND class = '$class'";
        $run = mysqli_query($conn,$qry);
        if(mysqli_num_rows($run)<1)
        {
          echo "<h2>No data found!</h2>";
        }
        ?>
        <table>
          <tr>
            <th>Name</th>
            <th>Rollno</th>
            <th>class</th>
            <th>Adress</th>
            <th>Phone no.</th>
            <th>Image</th>
            <th>Edit</th>
          </tr>
          <?php
          while($data = mysqli_fetch_assoc($run))
          {
          ?>
            <tr>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['rollno']?></td>
            <td><?php echo $data['class']?></td>
            <td><?php echo $data['address']?></td>
            <td><?php echo $data['phoneno']?></td>
            <td><img src = "../dataimg/<?php echo $data['image']?>" height="100px" width="100px"></td>
            <td> <a href = "updateform.php?sid=<?php echo $data['id']?>" >Edit</a> </td>
            </tr>
            <?php
          }
    }
?>