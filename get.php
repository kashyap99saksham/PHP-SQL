<html> GET INFO IS IN SEPERATE FILE
    <form action = "get.php" method="get">      
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
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    echo $name,$address,$phone,$age,$gender;
?>