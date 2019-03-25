<?php
require_once('connection/connection.php');
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$deletion="DELETE from post.admin WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:for sale.php?msg=Administrator DELETED");
		exit;
	}
	else
	{
		header("location:for sale.php?msg=Admin DELETION FAILED");
		exit;
	}
}
?>