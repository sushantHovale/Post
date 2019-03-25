<?php
require_once('connection/connection.php');
if(isset($_POST['mm']) && $_POST['mm']=="mblcmp")
{
	$title=$_POST['fr_title'];
	$pos=$_POST['pos'];
	$query="INSERT INTO sub_heading (id,sub_id,sub_title,position) VALUES ('','2','$title','$pos')";
	$queryInsertion=mysql_query($query);
	if($queryInsertion)
	{
		header('location:comunity.php?msg=Subcategory Added');
		exit;
	}
	else
	{
		header('location:comunity.php?msg=Fail to add Try Again!');
		exit;
	}
}
?>

