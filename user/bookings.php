<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php 
$query="Select * from user where username='$loged_user' ";
$insertionquery=mysqli_query($connection,$query);
$rec=mysqli_fetch_array($insertionquery);
  $u_email=$rec['u_email'];


$query="Select * from useradbook where u_email='$u_email' ";
$insertionquery=mysqli_query($connection,$query); 


?>
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
<a href="#">Edit Your posts</a>
</div>        

<?php
$total_recs=mysqli_num_rows($insertionquery);
	if($total_recs == 0)
	 { 	
		echo "<br/> <br/> <br/>You haven't posted Ad at yet";
		exit;	
	 } 
else {
  $rec=mysqli_fetch_array($insertionquery);
$id=$rec['id'];
$query="Select * from userad where id='$id' ";
$insertionquery=mysqli_query($connection,$query);

$k=1;
 while($rec=mysqli_fetch_array($insertionquery)){?>
<table width="100%" cellspacing="0" cellpadding="0" id="table">
  <tr>
    <td style="color:#b07df4;">Ad title</td>
    <td style="color:#b07df4;"> Photo</td>
    <td style="color:#b07df4;">Cell Number</td>
    <!--<td style="color:#b07df4;">Edit </td>-->
    <td style="color:#b07df4;">Delete</td>
  </tr>
  <tr>
    <td width="100px"><?php echo $rec['ad_title'];?></td>
    <td id="pic" width="150px"><img src="../Uploaded/<?php echo $rec['photo_name'];?>"  width="100" height="100" style="border-radius:5px; padding:3px; "/></td>
    <td width="150px"><?php echo $rec['m_number'];?></td>
    <!--<td><a href="../user/edit_post.php?EDITC=<?php /*?><?php echo $get['u_name']?><?php */?>"><img src="../_images/edit_user.png" /></a></td>-->

    <td><a href="delbookings.php?DELC=<?php echo $rec['id']?>&email=<?php echo $u_email ;?>"><img src="../_images/delet.png"/></a></td>

  </tr >
</table>
	


<?php $k++; }
}
?>
</div>
</div>


</body>
</html>