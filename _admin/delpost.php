<?php require_once("includes/session.php");?>
<?php require_once('connection/connection.php');
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$deletion="DELETE from post.freead WHERE id='$id'";
	$Del=mysql_query($deletion);
	if($Del)
	{
		header("location:../_admin/manageads.php?msg='-->POST deleted.'");
		exit;
	}
	else
	{
		header("location:../_admin/manageads.php?msg=POST cant be deleted try again.");
		exit;
	}
}
?>