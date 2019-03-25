<?php
require("connection/connection.php");

$ttitle=$_POST['title'];
$ext=$_POST['ext'];
$query="INSERT INTO post.heading (id,title,visible,extension) VALUES ('','$ttitle',1,'$ext')";
$insertion=mysql_query($query);
if($insertion)
{
header('location:newmenu.php?msg=Heading Inserted');
exit;	
}
else
{
header('location:newmenu.php?msg=Heading Insertion Failed');
exit;
}
?>