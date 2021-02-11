<?php
include('config.php');
 
$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";
if(mysqli_query($conn, $sql))
{
	 header("Location:details1.php");
}
else{
    echo "Deletion failed...";
}
?>