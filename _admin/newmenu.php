<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
require_once('connection/connection.php');
$query="Select * from heading order by id asc";
$insertionquery=mysql_query($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inset new heading Admin</title>
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
	margin-left:30px;	
	
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
<div class="back">
<a href="index.php">Control Panel</a>
</div>
<div id="image">
<a href="newmenu.php"><img src="../_images/signin.png" /></a>
</div>
<div id="page">

<?php require_once("includes/menu.php"); ?>
<div id="table">

<form id="form1" name="form1" method="post" action="menuinsertion.php">

        	<table width="400px">
            	<tr>
                	<td colspan="2" id="tableh2">Insert new heading into homepage</td>
            	</tr>
                
                <tr>
                	<td colspan="2" id="message"><?php echo $msg;?></td>
            	</tr>
                
                
            	<tr>
                	<td class="text">Heading Title</td>
                    <td><input name="title" type="text" class="textfeilds"  id="title" required /></td>
            	</tr>
                
                <tr>
                	<td class="text">Page extension</td>
                    <td><input name="ext" type="text" class="textfeilds"  id="ext" required /></td>
            	</tr>
            	<tr>
                	<td class="text"></td>
                  <td><input name="" type="submit" class="inputbutton"  value="Insert Now" />
                      <input name="mm" type="hidden" id="mm" value="addmenu" />
                  <input name="Reset" type="reset" class="inputbutton" id="button" value="Reset All" /></td>
            	</tr>
            </table>     
        </form>
        
        

</div>
        <div id="forshow">
      		<table width="100%">
  <tr>
  	<td colspan="4" class="td" style="text-align:center; font-size:18px;">::::: Manage Your headings  ::::: </td>
  
  </tr>
  <tr class="id">
    <td class="td">ID</td>
    <td class="td">TITLE</td>
    <td class="td">VISIBLE</td>
    <td class="td">EDIT</td>
    <!--<td class="td">DELETE</td>-->
  </tr>
  <?php $k=1; while($get=mysql_fetch_array($insertionquery)) {?>
  <tr class="id1">
    <td><?php echo $get['id'];?></td>
    <td><?php echo $get['title'];?></td>
  <td>  <?php $abc="SELECT * FROM post.menu.visible";
		$vis=mysql_fetch_array($abc);
	if ($vis == 0)
	{
		echo '<img src="../_images/yes.png">';
	}
	else {
		echo '<img src="../_images/no.png">';
	}
	 ?>
   </td>
    <td><a href="editmenu.php?EDITC=<?php echo $get['id']?>"><img src="../_images/edit.png" /></a></td>
    <!--<td><a href="delheading.php?DELC=<?php /*?><?php echo $get['id']?><?php */?>"><img src="../_images/delet.png" /></a></td>-->
  </tr>
  <?php $k++; }?>
          </table>
</div>
</div>
</body>
</html>