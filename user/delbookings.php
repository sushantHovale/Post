<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); 
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
	$id=$_REQUEST['DELC'];
	$email=$_REQUEST['email'];

	
	$deletion="DELETE from post.useradbook WHERE id='$id' AND u_email='$email' ";
	$Del=mysqli_query($deletion);

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