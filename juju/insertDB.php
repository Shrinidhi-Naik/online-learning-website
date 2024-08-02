<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="lightgray">
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
        $q="insert into register values('$na','$em','$ph','$pa','$cp')";

        //execute the query
        $r=mysqli_query($con,$q);
        if($r){
            echo"Record saved";
        }

    }
    ?>
    <form action="" method="post"align="center">
        <h2 style="text-align:center;color:red;">REGISTRATION FORM</h2>
        <br><br>
    NAME:<h2 style="text-align:center"><input type="text" name="name" id="name"></h2>
    <br><br>
EMAIL:<h2 style="text-align:center"><input type="email" name="mail" id="mail"></h2>
<br><br>
PHONE:<h2 style="text-align:center"><input type="text" name="phone" id="phone"></h2>
<br><br>
PASSWORD:<h2 style="text-align:center"><input type="password" name="pass" id="pass"></h2>
<br><br>
RETYPE PASSWORD:<h2 style="text-align:center"><input type="password" name="cpass" id="cpass"></h2>
<br><br>
<h2 style="text-align:center"><input type="submit" value="REGISTER" name="sub"></h2>
</form>
    
</body>
</html>