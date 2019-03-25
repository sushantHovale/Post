<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>layout</title>
<style type="text/css" >
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
#menu{
	/*float: left;*/
	min-height:120px;
	width: 200px;
	line-height:30px;
	padding-left:25px;
}
#menu ul {
	/*margin-left:10px;*/
}
#menu ul li {
	font-family:Verdana, Geneva, sans-serif;
	border-bottom:2px solid  #FFB111;
	list-style:none;
	line-height:40px;
	text-decoration: none;
	font-size: 22px;
}
#menu ul li a {
	text-decoration: none;
	width:auto;
	height:40px;
	color:#053C4B;
	font-weight: lighter;
	letter-spacing: -1px;
	padding:5px 20px;
	/*-webkit-transition:ease-in-out 0.3s;*/
}
#menu ul li a:hover { color:#fff;
	
}
#menu ul li:hover{
border-bottom:2px solid #FFF;	
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
</style>
</head>

<body>
<div id="image">
<img src="../_images/signin.png" />
</div>
<div id="page">

<?php require_once("includes/menu.php"); ?>
</div>
</div>
</body>
</html>