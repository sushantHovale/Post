<?php require_once("connection/connection.php");
if(isset($_POST['mm']) && $_POST['mm']=="login")
{
	$username=$_POST['user'];
	$passwprd=sha1($_POST['pass']);
	$query="SELECT * from post.admin WHERE name='$username' 
	AND hash='$passwprd'";
	$reees=mysql_query($query);
	$total_recs=mysql_num_rows($reees);
	if($total_recs == 0)
	{
		header("location:login.php?msg=!!!!! Wrong input check your CAPSLOCK and try again !!!!!");
		exit;	
	}
	if ($total_recs>0)
	{
		$logeduser= $username;
		session_start();
		$_SESSION['users']=$username;
		header("location:index.php");
		exit;
	}
	else
	{
		header("location:login.php?msg=!!!! check your CAPSLOCK and try again");
	}
	}


?>