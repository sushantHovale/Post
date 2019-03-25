<?php
require_once('connection/connection.php');
if(isset($_POST['fr_id']) && $_POST['fr_id']!='')
{
	$getid=$_POST['fr_id'];
	$tname=$_POST['fr_title'];
	$ppass=sha1($_POST['pass']);
	$companyeditquery = "UPDATE post.admin SET name='$tname',hash='$ppass' WHERE id='$getid'";
	$queryeditexecution=mysql_query($companyeditquery);
	if($queryeditexecution)
	{
		header('location:admincon.php?msg= Edit Succesfully');
		exit;
	}
	else
	{
		header('location:admin.php?msg= Edit Failed');
		exit;
	}
}
?>