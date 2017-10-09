<?php
require_once('conn.php');
$brandname=$_POST['name'];
$managername=$_POST['managername'];
$myemail=$_POST['myemail'];
$myphone=$_POST['myphone'];
$mypassword=$_POST['mypassword'];
/*
echo $brandname;
echo $managername;
echo $myemail;
echo $myphone;
echo $mypassword;
 */
$insert="INSERT INTO $table (brandname,managername,myemail,myphone, mypassword) VALUES ('$brandname','$managername','$myemail','$myphone','$mypassword')";
$query=mysqli_query($conn,$insert);
if($query)
{
    header("location:../index.php");
}
else
{
    echo mysql_error();
}


?> 
