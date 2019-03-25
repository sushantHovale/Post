<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php {
	$msg=$_GET['msg'];
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user</title>
<link rel="stylesheet" type="text/css" href="../_css/userindex.css" />

	<link rel="stylesheet" href="../js/development-bundle/themes/sunny/jquery.ui.all.css">
	<script src="../js/development-bundle/jquery-1.9.1.js"></script>
	<script src="../js/development-bundle/ui/jquery.ui.core.js"></script>
	<script src="../js/development-bundle/ui/jquery.ui.widget.js"></script>
	<script src="../js/development-bundle/ui/jquery.ui.position.js" ></script>
	<script src="../js/development-bundle/ui/jquery.ui.menu.js"></script>
	<link rel="stylesheet" href="../js/development-bundle/demos/demos.css">
	<script>
	$(function() {
		$( "#menu" ).menu();
	});
	</script>
	<style>
	.ui-menu { 

	
	 }
	
	</style>
</head>

<body>
<div id="fullheader">
<div id="data">
<p>Loged In:<span style=" font-size:14px; color:white; line-height:50px; font-weight:bold; padding:10px;" >"<?php echo ucwords($loged_user)  ?>"</span></p>
<div id="logout">
<a href="../_includes/user_logout.php" >LogOut</a>
</div>



</div>
</div>



<div id="body">
<div id="content">
<div id="topmenu">
<a href="index.php">Post an Ad</a>
</div>
<div id="topmenu">
<a href="edit.php">Edit Your posts</a>
</div>
<div id="topmenu">
<a href="bookings.php">My Booking</a>
</div>


<span style="color:#ffb51a; line-height:20px; font-size:14px; font-family:'Comic Sans MS', cursive; text-align:center;" ><?php echo $msg; ?> </span>

<div id="verticalmenu">
<?php echo navigation_user($sel_subject, $sel_page); ?>
<?php echo $sel_subject; ?><br />
			<?php echo $sel_page; ?><br />
            
</div>            
</div>
</div>


</body>
</html>