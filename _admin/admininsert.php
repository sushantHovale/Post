<?php
require_once("connection/connection.php");
if(isset($_POST['admin']) && $_POST['admin']=="mmm")

{
	$title=$_POST['title'];
	$pwd=sha1($_POST['hash']);
	$query="INSERT INTO admin (id,name,hash) VALUES ('','$title','$pwd')";
	
	$queryInsertion=mysql_query($query);
	if($queryInsertion)
	{
		header("location:admincon.php?msg=Administrator Added Successfully");
		exit;
	}
	else
	{
		header('location:admincon.php?msg=Fail to Add Try Again!');
		exit;
	}


	
}
?>

