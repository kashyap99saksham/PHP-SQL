<html>
    <header>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Student Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>
            STUDENT MANAGEMENT SYSTEM 
        </title>
        <style>
            #wall{
                /* border:  2px solid black; */
                /* padding: 25px; */
                background: url(images/wallpaper.png);
                background-repeat: no-repeat;
                background-size: 1600px 800px;
                }
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
                tr:nth-child(odd) {
                    background-color: #5292f2
                }
                tr:nth-child(even) {
                    background-color: #cad8ed
                }
        </style>
    <header>
    <body id="wall">


   
    <h3 align="right" ><a href="admin/alogin.php">GO TO ADMIN</a></h3>
    <body>
    <body topmargin="5%" align = "center">
        <h1> 
            WELCOME TO STUDENT MANAGEMENT SYSTEM
        </h1>
        <form action = "index.php" method= "post">
            <table align = "center" width = "40%" border = 2>
                <tr>
                    <th colspan= "2">
                    <H2><marquee direction = "right" >STUDENT INFORMATION</marquee></H2>

                        <!-- <marquee><h2 align = 'center'>STUDENT INFORMATION</h2></marquee> -->
                    </th>
                </tr>
                <tr>
                    <td>
                        choose standard
                    </td>
                    <td>
                        <select name = "class" required>
                            <option value = "1" >
                                1st
                            </option>
                            <option value = "2" >
                                2nd
                            </option>
                            <option value = "3" >
                                3rd
                            </option>
                            <option value = "4" >
                                4th
                            </option>
                            <option value = "5" >
                                5th
                            </option>
                            <option value = "6" >
                                6th
                            </option>
                            <option value = "7" >
                                7th
                            </option>
                            <option value = "8" >
                                8th
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter rollno
                    </td>
                    <td>
                        <input type = 'number' name = "rollno">
                    </td>
                </tr>
                <tr>
                    <td align = "center" colspan = "2">
                        <input Type = "submit" name = "submit" value = "Show info">
                    </td>
                </tr>
            </table>
        </form>
        <!-- </div> -->
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('dbconn.php');
        extract($_POST);
        $qry = "SELECT * FROM students WHERE rollno = '$rollno' AND class = '$class'";
        $run = mysqli_query($conn,$qry);
        if(mysqli_num_rows($run)<1)
        {
          echo "<h2>No data found!</h2>";
        }
        $data = mysqli_fetch_assoc($run);
        ?>
        <table>
          <tr>
            <th>Name</th>
            <th>Rollno</th>
            <th>class</th>
            <th>Adress</th>
            <th>Phone no.</th>
            <th>Image</th>
            <!-- <th>Edit</th> -->
          </tr>
          
            <tr>
            <td><?php echo $data['name']?></td>
            <td><?php echo $data['rollno']?></td>
            <td><?php echo $data['class']?></td>
            <td><?php echo $data['address']?></td>
            <td><?php echo $data['phoneno']?></td>
            <td><img src = "dataimg/<?php echo $data['image']?>" height="100px" width="100px"></td>
            <!-- <td> <a href = "updateform.php?sid=<?php echo $data['id']?>" >Edit</a> </td> -->
            </tr>
            <?php
    }
?>