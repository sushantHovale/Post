<?php require_once("includes/session.php");?>
<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);
require_once('connection/connection.php');
$query="Select * from userad  ";
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
	width:1200px;
	margin-left: 20px;
	border-left-width: 1px;
	border-left-style: dashed;
	border-left-color: #FFF;
	border-right-width: 1px;
	border-right-style: dashed;
	border-right-color: #FFF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:10px;
	text-align:center;
	margin-bottom:50px;
}
#tableh2{
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif;
	line-height: 30px;
	text-align: left;
	padding-left: 3px;
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
#topmenu{
	height:30px;
	line-height:30px;
	font: Verdana, Geneva, sans-serif;
	font-size: 16px;
	border-radius: 5px 5px 0px 0px;
	margin-left: 7px;
	margin-bottom: 10px;
	width: 120px;
	float: left;
	margin-top: 5px;
	text-align: center;
	background-color: #FFB51A;
	border-top-width: 2px;
	border-right-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #b07df4;
	border-right-color: #b07df4;
	border-bottom-color: #E77003;
	border-left-color: #b07df4;
}
#topmenu a{
	text-decoration:none;
	color:#FFF;
	background-color: #FFB51A;
}
#topmenu:hover{
	font-size:17px;
		border-top-width: 2px;
	border-right-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color:#CCC;
	border-right-color: #CCC;
	border-bottom-color: #E77003;
	border-left-color: #CCC;
}
#pic img{
	border:2px solid #FFB51A; 
	margin-left:10px;
	
}
#pic img:hover{
	-moz-transform:scale(2);
	-ms-transform:scale(2);
	-o-transform:scale(2);
	-webkit-transform:scale(2);
	transform:scale(2);
	-moz-transform-origin:left;
	-ms-transform-origin:left;
	-o-transform-origin:left;
	-webkit-transform-origin:left;
	transform-origin:left;	
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
<div id="topmenu">
<a href="manageads.php">Free posts</a>
</div>
<div id="topmenu">
<a href="">Users posts</a>
</div> 
<span style="color:#09F; padding-left:40px; line-height:40px;"><?php echo $msg;?></span>          
<?php




$k=1;
 while($rec=mysql_fetch_array($insertionquery)){?>   	   
        	<table cellspacing="0" cellpadding="0" id="table">
            	
                
            	<tr>
                	<td colspan="2" id="tableh2"><b>Users post</b></td>
            	</tr>

               <tr>
    <td style="color:#FFF; padding-left:10px;">Photo</td>
    <td style="color:#FFF; padding-left:10px;">User name </td>
    <td style="color:#FFF; padding-left:10px;">Ad title </td>
    <td style="color:#FFF; padding-left:10px;">Description </td>
    <td style="color:#FFF; padding-left:10px;">Price </td>
    <td style="color:#FFF; padding-left:10px;">Contact Name </td>
    <td style="color:#FFF; padding-left:10px;">Email </td>
    <td style="color:#FFF; padding-left:10px;">Cell Number</td>
    <td style="color:#FFF; padding-left:10px;">Address </td>
    <!--<td style="color:#b07df4;">Edit </td>-->
    <td style="color:#F33; padding-left:10px;">Delete</td>
  </tr>
  <tr>
    <td id="pic"><img src="../Uploaded/<?php echo $rec['photo_name'];?>"  width="100" height="90" style="border-radius:5px; padding:3px; "/></td>
    <td style="padding-left:10px; width:120px;" ><?php echo $rec['u_name'];?></td>
    <td style="padding-left:10px width:120px;;" ><?php echo $rec['ad_title'];?></td>
    <td style="padding-left:10px; font-size:9px; width:150px;" ><?php echo $rec['description'];?></td>
    <td style="padding-left:10px; width:150px;" ><?php echo $rec['price'];?></td>
    <td style="padding-left:10px; width:150px;" ><?php echo $rec['contact_name'];?></td>
    <td style="padding-left:10px; width:150px;" ><?php echo $rec['email'];?></td>
    <td style="padding-left:10px; width:150px;"><?php echo $rec['m_number'];?></td>
    <td style="padding-left:10px; font-size:9px; width:150px;" ><?php echo $rec['address'];?></td>

    <td style="width:70px;"><a href="deluserpost.php?DELC=<?php echo $rec['id']?>"><img src="../_images/delet.png"/></a></td>

  </tr >
            </table>     
<?php $k++; }

?>     


      
  	
 </div>     

    
			
</body>
</html>