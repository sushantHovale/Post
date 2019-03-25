<?php
require_once('connection/connection.php');
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$deletion="DELETE from post.sub_heading WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:real_estate.php?msg=Category DELETED");
		exit;
	}
	else
	{
		header("location:real_estate.php?msg=Category DELETION FAILED");
		exit;
	}
}
?>