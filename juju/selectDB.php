<?php
$con=mysqli_connect("localhost","root","","techciti");
$q="select * from register";
$r=mysqli_query($con,$q);
//many databases are present so while loop is used
while($d=mysqli_fetch_assoc($r)){
    echo"name:".$d['name'];
    echo"<br><br>";
    echo"email:".$d['email'];
    echo"<br><br>";
    echo"phone:".$d['phone'];
    echo"<br><br>";
    echo"password:".$d['password'];
    echo"<br><br>";
    echo"***************";
    echo"<br><br>";

}
?>