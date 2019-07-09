<html> POST INFO IS IN SEPERATE FILE
    <form action = "post.php" method="post">      
        <table border="1" width = "30%" align = "center">
            <tr>
                <td width = "65%">
                    name
                </td>
                <td>
                    <input type = "text" placeholder = "xyz" name = "name"/>
                </td>
            </tr>
            <tr>
                <td width = "65%">
                    Address
                </td>
                <td>
                    <input type = "text" placeholder = "x street" name = "address"/>
                </td>
            </tr>
            <tr>
                <td width = "65%">
                    Phone no.
                </td>
                <td>
                    <input type = "number" placeholder = "0928202" name = "phone"/>
                </td>
            </tr>
            <tr>
                <td width = "65%">
                    age
                </td>
                <td>
                    <input type = "number" placeholder = "20" name = "age"/>
                </td>
            </tr>
            <tr>
                <td width = "65%">
                    gender
                </td>
                <td>
                    <input type = "radio"  name = "gender" value="male"> male
                    <input type = "radio"  name = "gender" value = "female"> female

                </td>
                
            </tr>
            <tr align = "center">
                <td  >
                    <input  type = "submit" value = "submit"> 
                </td>
            </tr>
        </table>
    </form>
</html>
<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    echo $name,$address,$phone,$age,$gender;
?>