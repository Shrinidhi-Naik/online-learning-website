<?php

echo"thanks";
echo"<br><br>";
$na=$_REQUEST['name'];
$em=$_REQUEST['mail'];
$ph=$_REQUEST['phone'];
$pa=$_REQUEST['pass'];
$cp=$_REQUEST['cpass'];

if($pa==$cp){
echo"name=".$na;
echo"email=".$em;
echo"phone=".$ph;
echo"password=".$pa;
echo"retype password=".$cp;
}
else{
    echo"<font color=red>password incorrect</font>";
}
   
    

?>