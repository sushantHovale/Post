<?php
require_once('connection/connection.php');
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$deletion="DELETE from post.heading WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:newmenu.php?msg=Heading DELETED");
		exit;
	}
	else
	{
		header("location:newmenu.php?msg=heading DELETION FAILED");
		exit;
	}
}
?>