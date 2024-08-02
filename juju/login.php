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
        
        $em=$_REQUEST['mail'];
        
        $pa=$_REQUEST['pass'];
        
        //to connect with database

        $con=mysqli_connect("localhost","root","","techciti");
        //to write a query insert into are keywords register is table name
        $q="select * from register where email='$em' and password='$pa'";

        //execute the query
        $r=mysqli_query($con,$q);
        if($d=mysqli_fetch_assoc($r)){
            header("location:selecttable.php");
        }

    }
    ?>
    <form action="" method="post">
    Name:<input type="text" name="name" id="name">
    <br><br>
email:<input type="email" name="mail" id="mail">

<br><br>
password:<input type="password" name="pass" id="pass">
<br><br>
<input type="submit"value="register"name="sub">

</form>
    
</body>
</html>