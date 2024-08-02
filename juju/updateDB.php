<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['sub'])){
        $na=$_REQUEST['name'];
        $em=$_REQUEST['mail'];
        $ph=$_REQUEST['phone'];
        $pa=$_REQUEST['pass'];
        $cp=$_REQUEST['cpass'];
        //to connect with database

        $con=mysqli_connect("localhost","root","","techciti");
        //to write a query insert into are keywords register is table name
        $q="update  register set phonde='$ph',password='$pa',cpassword='$cp' where email=$em'";

        //execute the query
        $r=mysqli_query($con,$q);
        if($r){
            echo"Record update";
        }

    }
    ?>
    <form action="" method="post">
    
Enter Registered email:<input type="email" name="mail" id="mail">
<br><br>
 enter updated phone:<input type="text" name="phone" id="phone">
<br><br>
 enter new password:<input type="password" name="pass" id="pass">
<br><br>
retype new password:<input type="password" name="cpass" id="cpass">
<br><br>
<input type="submit" value="update" name="sub">
</form>
    
</body>
</html>