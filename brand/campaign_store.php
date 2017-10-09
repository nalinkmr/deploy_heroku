<?php
session_start();
?>
<?php
require_once('conn.php');

$session=$_SESSION["username"];
$name=$_POST['pname'];
$description=$_POST['des'];
echo $name;
echo $description;
$photo= addslashes(file_get_contents($_FILES['pphoto']['tmp_name']));
$image =getimagesize($_FILES['pphoto']['tmp_name']);
$imagetype= $image['mime'];
$sql="INSERT INTO $table (name,description,image,imagetype,who) VALUES('$name','$description','$image','$imagetype','$session')";

$query=mysqli_query($conn,$sql);
if($query)
{
  header("location:add_del_display.php");
}
else
{
  echo mysql_error();
}
?>
