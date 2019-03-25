<?php
require_once('connection/connection.php');
if(isset($_POST['fr_id']) && $_POST['fr_id']!='')
{
	$getid=$_POST['fr_id'];
	$tname=$_POST['fr_title'];
	$ext=$_POST['ext'];
	$companyeditquery = "UPDATE post.heading SET title='$tname' AND extension'$ext' WHERE id='$getid'";
	$queryeditexecution=mysql_query($companyeditquery);
	if($queryeditexecution)
	{
		header('location:newmenu.php?msg=Category Edit Succesfully');
		exit;
	}
	else
	{
		header('location:newmenu.php?msg=Category Edit Failed');
		exit;
	}
}
?>