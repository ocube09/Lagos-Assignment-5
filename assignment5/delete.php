<?php  
	require_once 'config.php';
	$sql = "DELETE FROM survey WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($link, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>