<?php require_once("../_includes/user_session.php");?>
<?php require_once("../_includes/connection.php"); ?>
<?php require_once("../_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php 
if(isset($_REQUEST['EDITC']) && $_REQUEST['EDITC']!='')
{
	$editid=$_REQUEST['EDITC'];
	$query="Select * from userad where u_name='$loged_user' ";
	$insertionquery=mysql_query($query);
	$fetch=mysql_fetch_array($insertionquery);
}
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
<a href="edit.php">Edit Your posts</a>
</div>        
<div id="table2">
<form id="form" name="form" method="post" action="editcompros.php">

        	<table>
            	<tr>
                	<td colspan="2" id="tableh2"><b>Enter new values</b></td>
            	</tr>
                
            	<tr>
                	<td width="200" class="text">Old Title</td>
                    <td width="238"><input name="rr_title" type="text" class="textfeilds" id="rr_title" disabled="disabled"  placeholder="<?php echo $fetch['ad_title'];?>"/></td>
                    
            	</tr>
                <tr>
                	<td width="200" class="text">Enter new Title</td>
                    <td width="238"><input name="fr_title" type="text" class="textfeilds" id="fr_title" placeholder="........." /></td>
                    
            	</tr>
            	<tr>
                	<td width="200" class="text">Old subcategory name</td>
                    <td width="238"><input name="rr_title" type="text" class="textfeilds" id="rr_title" disabled="disabled"  placeholder="<?php echo $fetch['photo_name'];?>"/></td>
                    
            	</tr>
                <tr>
                	<td width="200" class="text">Enter new name</td>
                    <td width="238"><input name="fr_title" type="text" class="textfeilds" id="fr_title" placeholder="........." /></td>
                    
            	</tr>
                
                	<td class="id1"></td>
                  <td><input type="submit" class="inputbutton" value="Edit Now" />
                      <input name="mm" type="hidden" id="mm" value="editmob" /></td>
            	</tr>
            </table>     
        </form>
        </div>
</div>
</div>


</body>
</html>