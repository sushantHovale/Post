<?php require_once("includes/session.php");?>

<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
require_once('connection/connection.php');
$query="Select * from sub_heading where sub_id='1' order by position asc";
$insertionquery=mysql_query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>For sale subcategories</title>
<link type="text/css" rel="stylesheet" href="css/admin.css" />
</head>

<body>
<form action="includes/logout.php">
<input name="logout" type="submit" value="logout" class="logout" />


</form>
<div class="home">
<a href="newmenu.php">Home</a>
</div>
<div class="back">
<a href="index.php">Control Panel</a>
</div>
<div id="image">
<a href="newmenu.php"><img src="../_images/signin.png" /></a>
</div>
<div id="page">         
			<?php require_once('includes/menu.php')?>
   	  <div id="table">   
		<form id="form" name="form" method="post" action="for_saleinsert.php">

        	<table>
            	<tr>
                	<td colspan="2"><span id="message"><?php echo $msg;?></span></td>
            	</tr>
                
            	<tr>
                	<td colspan="2" id="tableh2"><b>Add new subcategory, for sale heading</b></td>
            	</tr>
                <tr>
                	<td width="160" class="text">Enter position of subcategory</td>
                    <td width="238"><input name="pos" type="text" class="textfeilds" id="pos" required="required" /></td>
            	</tr>
            	<tr>
                	<td width="160" class="text">Subcategory name</td>
                    <td width="238"><input name="fr_title" type="text" class="textfeilds" id="m_title" required="required" /></td>
            	</tr>
 
            	<tr>
                	<td class="id1"></td>
                  <td><input type="submit" class="inputbutton" value="Add Now" />
                      <input name="mm" type="hidden" id="mm" value="mblcmp" />
                  <input name="Reset" type="reset" class="inputbutton" id="button" value="Reset All" /></td>
            	</tr>
            </table>     
        </form>

      </div>
      
  		<div id="forshow">
      		<table width="100%">
  <tr class="id">
    <td class="td">Position</td>
    <td class="td">Title</td>
    <td class="td">Edit</td>
    <td class="td">Delete</td>
  </tr>
  <?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
  <tr class="id1">
    <td><?php echo $get['position'];?></td>
    <td><?php echo $get['sub_title'];?></td>
    <td><a href="editfr.php?EDITC=<?php echo $get['id']?>"><img src="../_images/edit.png" /></a></td>
    <td><a href="delfr.php?DELC=<?php echo $get['id']?>"><img src="../_images/delet.png" /></a></td>
  </tr>
  <?php $k++; }?>
          </table>

      
      	</div>
 </div>     

    
			
</body>
</html>