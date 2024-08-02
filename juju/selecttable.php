<?php
$con=mysqli_connect("localhost","root","","techciti");
$q="select * from register";
$r=mysqli_query($con,$q);
echo"<table border=2 cellspacing=10 cellpadding=10 align=center color=red><tr><td>name</td><td>email</td><td>phone</td><td>password</td></tr>";
//many databases are present so while loop is used
while($d=mysqli_fetch_assoc($r)){
   echo"<tr>";
   echo"<td>".$d['name']."</td>";
   echo"<td>".$d['email']."</td>";
   echo"<td>".$d['phone']."</td>";
   echo"<td>".$d['password']."</td>";
   echo"</tr>";
}
?>