<?php
if(isset($_GET['msg']) && $_GET['msg']!='')
{
	$msg=$_GET['msg'];
}
error_reporting(0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
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
	text-align:center;
}
#page{
	min-height: 530px;
	overflow:hidden;
	margin:0px auto;
	width:380px;	
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
	width: 250px;
	margin-top:10px;
	margin-bottom:5px;
	background: #FFB51A url(../_images/username.png) no-repeat 3px 7px;
	padding-left: 120px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #8B8B8B;
	border: 1px solid #999;
	margin-left:3px;
}
.password{
	border-radius: 3px;
	text-align: left;
	height: 35px;
	width: 250px;
	margin-top:10px;
	margin-bottom:5px;
	background: #FFB51A url(../_images/passwrod.png) no-repeat 3px 7px;
	padding-left: 120px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #8B8B8B;
	border: 1px solid #999;
	margin-left:3px;
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
	margin:0px auto;	
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
.login{
	border-radius: 3px;
	text-align: center;
	height: 35px;
	width: 372px;
	margin-top:10px;
	margin-bottom:5px;
	background-color:#1f7f5c;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color:#FFF;
	border: 1px solid #999;
	margin-left:3px;
}
#error{
	font-family: "Comic Sans MS", cursive;
	font-size: 10px;
	color: #FFF;
	text-decoration: underline;
	text-align:center;	
}
</style>
</head>

<body>
<!--<div class="home">
<a href="../index.php">Home</a>
</div>-->

<div id="page">
<div id="image">
<a href="login.php"><img src="../_images/signin.png" /></a>
</div>
<form action="loginpros.php" method="post">
<table width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:#FFF; font-family:Verdana, Geneva, sans-serif; font-size:18px; text-align:center;">Fill Your Credentials</td>
  </tr>
  <tr>
    <td><input name="user" type="text"   class="textfeilds" required="required" /></td>
  </tr>
  <tr>
    <td><input name="pass" type="password"    class="password" required="required" /></td>
  </tr>
  <tr>
    <td><input name="submit" type="submit" value="Login"  class="login"/></td>
  </tr>
  <tr>
    <td id="error" > <?php echo $msg;?></td>
    <td ><input name="mm" type="hidden" id="mm" value="login" /></td>
  </tr>
</table>
</form>
   </div>

    
			
</body>
</html>