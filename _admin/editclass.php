<?php require_once("includes/session.php");?>
<?php
require_once('connection/connection.php');

error_reporting(0);

if(isset($_REQUEST['EDITC']) && $_REQUEST['EDITC']!='')
{
	$editid=$_REQUEST['EDITC'];
	$query="Select * from sub_heading WHERE id='$editid'";
	$insertionquery=mysql_query($query);
	$fetch=mysql_fetch_array($insertionquery);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit subcategory of for sale</title>
<link type="text/css" rel="stylesheet" href="css/admin.css" />
</head>

<body>
<form action="includes/logout.php">
<input name="logout" type="submit" value="logout" class="logout" />


</form>
    <div id="page">  
    <div id="image">
<img src="../_images/signin.png" />
</div>                 
			<?php require_once('includes/menu.php')?>
   	  <div id="table">   
		<form id="form" name="form" method="post" action="editclasspros.php">

        	<table>
            	<tr>
                	<td colspan="2" id="tableh2"><b>Edit Comunity sub category</b></td>
            	</tr>
                
            	<tr>
            	  <td class="text">ID</td>
            	  <td><input name="fr_id" type="text" class="textfeilds" id="fr_id" readonly="readonly" value="<?php echo $editid;?>"/></td>
          	  </tr>
            	<tr>
                	<td width="200" class="text">Old subcategory name</td>
                    <td width="238"><input name="rr_title" type="text" class="textfeilds" id="rr_title" disabled="disabled"  placeholder="<?php echo $fetch['sub_title'];?>"/></td>
                    
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
    
			
</body>
</html>