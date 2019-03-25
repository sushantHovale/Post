<?php require_once("includes/session.php");?>
<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
require_once('connection/connection.php');
$query="Select * from admin order by id asc";
$insertionquery=mysql_query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator configration</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js">
setTimeout(function() {
    $("#theDiv").slideUp("fast");
}, 1000); // <-- time in milliseconds


</script>

<style type="text/css" >
#message{
	height:20px;
	font-size:14px;
	color:#F00;
	background: url(../_images/insert.png) no-repeat ;
	padding-left:20px;	
}
*{ margin:0px auto;
padding:0px;
background-color:#CFB0F9;
	
}
#image{
	height: 150px;
	background-repeat: no-repeat; 
	margin-left:500px;
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
	margin-left: 120px;
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
.textfeilds{
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
#forshow {
	float: left;
	height: auto;
	margin-bottom:20px;
	width:400px;
	margin-left: 40px;
	border-left-width: 1px;
	border-left-style: dashed;
	border-left-color: #FFF;
	border-right-width: 1px;
	border-right-style: dashed;
	border-right-color: #FFF;
	padding-left:10px;
}
.td{
	font-size:12px;
	color:#FFF;
	font-family:"Comic Sans MS", cursive;	
}
.back{
	background: #FFB51A url(../_images/back.png) no-repeat 5px 10px;
border-radius: 3px;
	text-align: right;
	height: 30px;
	width: 90px;
	margin-top:10px;	
	border: 1px solid #666;
	float:left;
	padding-right:5px;
	line-height:30px;
	margin-left:10px;	
	
}
.back a{
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color:#FFF;
	text-decoration:none;
	background:none;
}
.back:hover{
	border: 2px solid #666;
	
}
.home{
	width:62px;
	height:30px;
	background: #FFB51A url(../_images/home.png) no-repeat 3px 1px;
	border-radius: 3px;
	text-align: right;
	margin-top:10px;	
	border: 1px solid #666;
	float:left;
	padding-right:3px;
	line-height:32px;
	margin-left:30px;	
}
.home a{
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color:#FFF;
	text-decoration:none;
	background:none;
}
.home:hover{
	border: 2px solid #666;
	
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
<div class="home">
<a href="newmenu.php">Home</a>
</div>
<div class="back">
<a href="index.php">Control Panel</a>
</div>
<div id="image">
<a href="#"><img src="../_images/signin.png" /></a>
</div>
<div id="page">         
   	  <div id="table">   
		<form id="form" name="form" method="post" action="admininsert.php">

        	<table>
            	<tr>
                	<td colspan="2" id="message"><?php echo $msg;?></td>
            	</tr>
                
            	<tr>
                	<td colspan="2" id="tableh2"><b>Add new website Administrator</b></td>
            	</tr>
                
            	<tr>
                	<td width="130" class="text">Admin Name</td>
                    <td width="238"><input name="title" type="text" class="textfeilds"  value="<?php echo htmlentities($username); ?>" id="title" required="required" /></td>
            	</tr>
                <tr >
                	<td width="130" class="text">Password</td>
                    <td width="238"><input name="hash" type="password" class="textfeilds" value="<?php echo htmlentities($password); ?>" id="hash" required="required" /></td>
            	</tr>
                
            	<tr>
                	<td class="id1"></td>
                  <td><input type="submit" class="inputbutton" value="Add Now" />
                      <input name="admin" type="hidden" value="mmm" />
                  <input name="Reset" type="reset" class="inputbutton" id="button" value="Reset All" /></td>
            	</tr>
            </table>     
        </form>

      </div>
      
  		<div id="forshow">
      		<table width="100%">
  <tr class="id">
    <td class="td">ID</td>
    <td class="td">Username</td>
    <td class="td">EDIT</td>
  </tr>
  <?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
  <tr class="id1">
    <td><?php echo $get['id'];?></td>
    <td><?php echo $get['name'];?></td>
    <td><a href="editadmin.php?EDITC=<?php echo $get['id']?>"><img src="../_images/edit.png" /></a></td>
  </tr>
  <?php $k++; }?>
          </table>

      
      	</div>
 </div>     

    
			
</body>
</html>