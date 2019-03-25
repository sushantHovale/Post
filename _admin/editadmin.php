<?php require_once("includes/session.php");?>
<?php
require_once('connection/connection.php');

error_reporting(0);

if(isset($_REQUEST['EDITC']) && $_REQUEST['EDITC']!='')
{
	$editid=$_REQUEST['EDITC'];
	$query="Select * from post.admin WHERE id='$editid'";
	$insertionquery=mysql_query($query);
	$fetch=mysql_fetch_array($insertionquery);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<style type="text/css">
*{ margin:0px;
padding:0px;
background-color:#CFB0F9;
	
}
#image{
	height: 150px;
	background-repeat: no-repeat;
	text-align: center;
	margin-top: 20px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
#page{
	min-height: 530px;
	overflow:hidden;	
}

#fullmenu{
	width:205px;
	margin-left:20px;
}
#fullmenu h2{
	margin: 0px auto;
	width: 200px;
	font-size: 14px;
	text-align: left;
	height: 20px;
	color: #FFF;
	font-family: "Comic Sans MS", cursive;
	border-bottom:#FFF 1px solid;
}

.inputbutton{
	background: #efa45d; /* Old browsers */
background: -moz-linear-gradient(top,  #efa45d 1%, #f28926 49%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#efa45d), color-stop(49%,#f28926)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #efa45d 1%,#f28926 49%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #efa45d 1%,#f28926 49%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #efa45d 1%,#f28926 49%); /* IE10+ */
background: linear-gradient(to bottom,  #efa45d 1%,#f28926 49%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efa45d', endColorstr='#f28926',GradientType=0 ); /* IE6-9 */

border-radius: 3px;
	text-align: center;
	height: 40px;
	width: 100px;
	margin-top:10px;
	padding-left: 5px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color:#FFF;
	border: 1px solid #666;
	}
.inputbutton:hover{
	background: #ffebd3; /* Old browsers */
background: -moz-linear-gradient(top,  #ffebd3 1%, #f28926 49%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#ffebd3), color-stop(49%,#f28926)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #ffebd3 1%,#f28926 49%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #ffebd3 1%,#f28926 49%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #ffebd3 1%,#f28926 49%); /* IE10+ */
background: linear-gradient(to bottom,  #ffebd3 1%,#f28926 49%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffebd3', endColorstr='#f28926',GradientType=0 ); /* IE6-9 */
border: 2px solid #666;
	
}
#table{
	width:500px;
	margin-left: 150px;
	float: left;
	border-left-width: 1px;
	border-left-style: dashed;
	border-left-color: #FFF;
	border-right-width: 1px;
	border-right-style: dashed;
	border-right-color: #FFF;
}
#tableh2{
	font-size: 18px;
	font-family: Verdana, Geneva, sans-serif;
	line-height: 30px;
	text-align: center;
	padding-right: 20px;
	color: #FFF;
	font-weight: bold;
}
.inputfield{
	border-radius: 3px;
	text-align: left;
	height: 35px;
	width: 200px;
	margin-top:10px;
	margin-bottom:5px;
	background: #FFF url(../_images/posttextfeild.png) no-repeat 3px 3px;
	padding-left: 35px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #8B8B8B;
	border: 1px solid #999;
}

.text{
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif;
	line-height: 30px;
	text-align: right;
	padding-right: 20px;
	color: #FFF;
	font-weight: bold;
}

.logout{
	width:70px;
	height:30px;
	background: #FFB51A url(../_images/logout.png) no-repeat 3px 1px;
	border-radius: 3px 13px 13px 3px;
	text-align: right;
	margin-top:10px;	
	border: 1px solid #666;
	float:right;
	padding-right:3px;
	line-height:32px;
	margin-right:30px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color:#FFF;
	text-decoration:none;	
}

.logout:hover{
	border: 2px solid #666;
	
}
</style>
</head>

<body>
<form action="includes/logout.php">
<input name="logout" type="submit" value="logout" class="logout" />


</form>
    <div id="page">  
    <div id="image">
<img src="../_images/signin.png" />
</div>                 
   	  <div id="table">   
		<form id="form" name="form" method="post" action="editadminpros.php">

        	<table>
            	<tr>
                	<td colspan="2" id="tableh2"><b>Edit Your username and password</b></td>
            	</tr>
                
            	<tr>
            	  <td class="text">ID</td>
            	  <td><input name="fr_id" type="text" class="inputfield" id="fr_id" readonly="readonly" value="<?php echo $editid;?>"/></td>
          	  </tr>
            	<tr>
                	<td width="200" class="text">Enter new name</td>
                    <td width="238"><input  name="fr_title" type="text" class="inputfield" id="fr_title" "/> </td>
                    
            	</tr>
                
                
                <tr>
                	<td width="200" class="text">Enter new Password</td>
                    <td width="238"><input  name="pass" type="password" class="inputfield" id="pass" /> </td>
                    
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