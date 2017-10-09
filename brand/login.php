<?php
session_start();
?>
<?php
require_once('conn.php');
$myname = $_POST['username'];
$mypassword = $_POST['password'];
//echo $myname;
//echo $mypassword;
//$myusername=stripslashes($myusername);
//$mypassword=stripslashes($mypassword);
$sql = "SELECT * FROM $table WHERE brandname='$myname' and mypassword='$mypassword'";
$query = mysqli_query($conn,$sql);
$count = mysqli_num_rows($query);
while($row=mysqli_fetch_array($query))
{
  $uname=$row[1];
}
if($count==0)
{
  header('Location: login.html');
}
else
{
  $_SESSION["username"]= $myname;
  header('Location:  add_del_display.php');
}
?> 
