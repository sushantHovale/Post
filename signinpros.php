<?php require_once("_includes/connection.php");
if(isset($_POST['login']) && $_POST['login']=="mmm")
{
	$username=$_POST['user'];
	$passwprd=sha1($_POST['pass']);
	$query="SELECT * from post.user WHERE username='$username' AND u_hash='$passwprd'";
	$reees=mysqli_query($connection,$query);
	$total_recs=mysqli_num_rows($reees);
	if($total_recs == 0)
	{
		header("location:signin.php?msg=!!!!! Wrong input check your CAPSLOCK and try again !!!!!");
		exit;	
	}
	if ($total_recs>0)
	{
		$logeduser= $username;
		session_start();
		$_SESSION['users']=$username;
		header("location:user/index.php");
		exit;
	}
	else
	{
		header("location:signin.php?msg=!!!! check your CAPSLOCK and try again");
	}
	}


?>