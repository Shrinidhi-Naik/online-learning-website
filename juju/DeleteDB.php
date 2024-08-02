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
        
        //to connect with database

        $con=mysqli_connect("localhost","root","","techciti");
        //to write a query insert into are keywords register is table name
        $q="delete from register where email=$em'";

        //execute the query
        $r=mysqli_query($con,$q);
        if($r){
            echo"Record deleted";
        }

    }
    ?>
    <form action="" method="post">
    
Enter Registered email:<input type="email" name="mail" id="mail">
<br><br>
<input type="submit" value="delete" name="sub">
</form>
    
</body>
</html>