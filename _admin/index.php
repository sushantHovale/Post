<?php require_once("includes/session.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">

 
 $(document).ready(function() {
    $("#message").slideDown(1).delay(1000).slideUp('fast');
});
</script>
<style type="text/css">
#message{
	margin:0px auto;
	font-size:20px;
	font-family:Verdana, Geneva, sans-serif;
	width:450px;
	height:50px;
	text-align:center;
	border: 1px solid #F9A800;
	color:#d60000;
	line-height:12px;
	background: #FFE09F url(../_images/adminwel.png) no-repeat 25px 10px;	
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
	margin:0px auto;
	width:900px;
	min-height:200px;	
	
}
#page p{
	font-size:14px;
	font-family:Verdana, Geneva, sans-serif;
	color:#09F;
	text-align:center;
}
#page a{
	float: left;
	font-size: 18px;
	border: 1px solid #b07df4;
	background-color: #CFB0F9;
	height:60px;
	width:200px;
	text-decoration:none;
	border-radius:5px;
	margin:40px;
	color:#FFF;
	text-align:center;
	line-height:60px;
}
#page a:hover{
	background: #ddcaf7; /* Old browsers */
	background: -moz-linear-gradient(top,  #ddcaf7 1%, #cfb0f9 50%, #cfb0f9 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#ddcaf7), color-stop(50%,#cfb0f9), color-stop(100%,#cfb0f9)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ddcaf7 1%,#cfb0f9 50%,#cfb0f9 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ddcaf7 1%,#cfb0f9 50%,#cfb0f9 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ddcaf7 1%,#cfb0f9 50%,#cfb0f9 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ddcaf7 1%,#cfb0f9 50%,#cfb0f9 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ddcaf7', endColorstr='#cfb0f9',GradientType=0 ); /* IE6-9 */
	border: 2px solid #8C43EF;
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
<div id="message">
<p> Welcome Admin Have a nice time</p>

</div>
<div id="page">
<div id="image">
<img src="../_images/signin.png" />
</div>
<p> What do you want to do <?php echo ucwords($loged_user)  ?></p>
<a href="newmenu.php"> Edit Layout</a>

<a href="manageads.php"> Manage users Ads</a>

<a href="admincon.php"> Admins configration</a>

</div>



<body>
</body>
</html>