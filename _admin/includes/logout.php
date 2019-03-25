<?php require_once("../connection/connection.php"); ?>
<?php
// Four steps to closing a session
		// (i.e. logging out)

		// 1. Find the session
		session_start();
		
		// 2. Unset all the session variables
		$_SESSION = array();
		
		// 3. Destroy the session cookie
		if(isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
			
		}
		
		// 4. Destroy the session
		session_destroy();
		header('location:../login.php?msg=You are now logged out.');
		exit;
			
/*/*session_start();
if(isset($_SESSION['views']))
  unset($_SESSION['views']);

  session_destroy();
  redirect_to("login.php?msg=");*/
?>
