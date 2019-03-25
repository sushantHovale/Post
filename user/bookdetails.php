<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php 
$query="Select * from userad where u_name='$loged_user' ";
$insertionquery=mysqli_query($connection,$query);
?>

<?php  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user</title>
<link rel="stylesheet" type="text/css" href="../_css/userindex.css" />
	
</head>

<body>
<div id="fullheader">
<div id="data">
<p>Loged in: <span style=" font-size:14px; color:white; line-height:50px; font-weight:bold;" >"<?php echo ucwords($loged_user)  ?>"</span></p>
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

<?php
if(isset($_REQUEST['DELC']) && $_REQUEST['DELC']!='')
{
  $id=$_REQUEST['DELC'];
  $deletion="SELECT * FROM `useradbook` WHERE id='$id' ";

  $Del=mysqli_query($connection,$deletion);
}
$total_recs=mysqli_num_rows($Del);
	if($total_recs == 0)
	 { 	

		echo "<br/> <br/> <br/>You have no Bookings for posted Ad at yet";
		exit;	
	 } 
else {



$k=1;
 while($rec=mysqli_fetch_array($Del)){?>
<table width="100%" cellspacing="0" cellpadding="0" id="table">
  <tr>
    <td style="color:#b07df4;">First Name</td>
    <td style="color:#b07df4;"> Last Name</td>
    <td style="color:#b07df4;">Cell Number</td>
    <!--<td style="color:#b07df4;">Edit </td>-->
    <td style="color:#b07df4;">Email</td>
    <td style="color:#b07df4;">Uid</td>
  </tr>
  <tr>
    <td width="100px"><?php echo $rec['f_name'];?></td>
<td width="100px"><?php echo $rec['l_name'];?></td>    
<td width="150px"><?php echo $rec['mobile'];?></td>
    <!--<td><a href="../user/edit_post.php?EDITC=<?php /*?><?php echo $get['u_name']?><?php */?>"><img src="../_images/edit_user.png" /></a></td>-->

<td width="100px"><?php echo $rec['u_email'];?></td>
<td width="100px"><?php echo $rec['uid'];?></td>
  </tr >
</table>
	


<?php $k++; }
}
?>
</div>
</div>


</body>
</html>