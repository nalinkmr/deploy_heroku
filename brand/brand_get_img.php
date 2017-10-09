<?php
session_start();
?>
<?php
require_once('conn.php');
$who=$_POST['who'];
echo $who;
$sql="select * from $table where who='$who'";

$query= mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($query));
{
  if($query)
  {
    $row=mysqli_fetch_array($query);
    $type="content-type: ".$row['imagetype'];
    header($type);
    echo $row['image'];
  }
  else
  {
    echo "cannt print the images";
  }
}
?>
