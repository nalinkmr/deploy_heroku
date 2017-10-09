<?php
require_once('conn.php');

$id=$_GET['id'];
echo $id;
$sql="DELETE FROM addcamp
  WHERE ID=$id";
$result = mysqli_query($conn,$sql);
if($result)
{
  header("location:add_del_display.php");
}
else
{
  echo "error deleting record:";
}
?>
