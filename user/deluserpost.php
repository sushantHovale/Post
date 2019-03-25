<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); 
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$deletion="DELETE from post.userad WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:../user/index.php?msg=POST deleted.");
		exit;
	}
	else
	{
		header("location:../user/index.php?msg=POST cant be deleted try again.");
		exit;
	}
}
?>