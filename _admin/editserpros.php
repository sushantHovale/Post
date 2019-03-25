<?php
require_once('connection/connection.php');
if(isset($_POST['fr_id']) && $_POST['fr_id']!='')
{
	$getid=$_POST['fr_id'];
	$tname=$_POST['fr_title'];
	$companyeditquery = "UPDATE post.sub_heading SET sub_title='$tname' WHERE id='$getid'";
	$queryeditexecution=mysql_query($companyeditquery);
	if($queryeditexecution)
	{
		header('location:services.php?msg=Category Edit Succesfully');
		exit;
	}
	else
	{
		header('location:services.php?msg=Category Edit Failed');
		exit;
	}
}
?>