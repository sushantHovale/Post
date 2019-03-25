



<?php 
	require("connection/connection.php");
	$query="Select * from post.heading order by id asc";
	$insertion=mysql_query($query);

?>

<style type="text/css">
#menu{
	float: left;
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
<div id="fullmenu">
<h2>Category Headings</h2>
<div id="menu">

      	  <ul>
          <?php $k=1; while($result=mysql_fetch_array($insertion)){?>
        	<li><a href="<?php echo $result['extension'].'.php';?>"> <?php echo $result['title'];?> </a></li>
       	  <?php $k++; }?>
            <!--<li><a href="menuins.php">Menu Insertion</a></li>
        	<li><a href="#">Portfolio</a></li>
        	<li><a href="#">Gallery</a></li>
        	<li><a href="#">Blog's</a></li>
        	<li><a href="#">About Us</a></li>
        	<li><a href="#">Contact Us</a></li>
        	--></ul>
        </div>
        </div>
