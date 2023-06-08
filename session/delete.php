<?php 
include("connection.php");
 $id=$_GET['ID'];

if($_GET['ACTION']=='DELETE'){

$delete="DELETE FROM user_detail  WHERE id='$id'";
$run=mysqli_query($conn,$delete);
if($run==true){
    header("location:dashboard.php");
}
}


?>