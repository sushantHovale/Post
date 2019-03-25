<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php find_selected_page(); ?>
<?php $query="Select * from userad where cat_id='$sel_page[id]' ";
$userad=mysqli_query($connection,$query);

$query="Select * from freead where cat_id='$sel_page[id]' ";
$freead=mysqli_query($connection,$query);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Ads </title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
	
	
</head>
<body>
<div id="body">
<?php include("_includes/header.html"); ?>
<div id="cat">
<div id="topheading">
<p>Ads found in these category.</p>
</div>

<?php

$total_recs=mysqli_num_rows($userad);
	if($total_recs == 0)
	 { 	
		echo "Sorry nothing is posted yet in this category";
		exit;	
	 } 
else {

$k=1;
 while($rec=mysqli_fetch_array($userad)){?>
<table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle">Title: <span style="color:#666;"><?php echo $rec['ad_title']; ?></span></td>
    
  </tr>
  <tr>
    <td rowspan="6" id="adpic"><img src="Uploaded/<?php echo ucwords($rec['photo_name']);?>"
     style="border-radius:15px; max-height:300px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        
        box-shadow:  0px 0px 5px 1px #FFD57D; "/></td>
    
    <td class="adbg" ><span style="color:#666;"><?php echo $rec['price']; ?></span><br/>Price </td>
    </tr>
    <tr>
    <td  class="adbg"> <span style="color:#666;"><?php echo $rec['contact_name']; ?></span><br/>Contact name</td>
   
  </tr>
  <tr>
    <td  class="adbg"><span style="color:#666;"><?php echo $rec['m_number']; ?></span><br/>Mobile number</td>
   </tr>
<tr>
    <td  class="adbg"><span style="color:#666;"><?php echo $rec['food']; ?></span><br/>Food Available</td>
   </tr> 
   <tr>
    <td  class="adbg"><span style="color:#666;"><?php echo $rec['person']; ?></span><br/>No of Beds Available</td>
   </tr>
  <td  class="adbg"><span style="color:#666;"><?php echo $rec['person_avl']; ?></span><br/>No of Beds Remaining</td>
   </tr>
  <tr>
    <td  class="adbg" colspan="1">Description:<br/><span style="color:#666;"><?php echo $rec['description']; ?></span><br/></td>
    <?php $id=$rec['id'] ?>
   <td  class="adbg"><?php echo '<a href="book.php?entry_id='.$id.'">Book</a>';?> </td>
  </tr>
</table>
<?php $k++; }
}
?>


<?php

$total_recs=mysqli_num_rows($freead);
	if($total_recs == 0)
	 { 
	 	echo "sorry nothing is posted from free users in this category";	
		exit;	
	 } 
else {

$b=1;
 while($rec=mysqli_fetch_array($freead)){?>
<table width="100%" cellspacing="4" cellpadding="4" id="table">
  <tr >
    <td colspan="2" class="adtitle">Title: <span style="color:#666;"><?php echo $rec['ad_title']; ?></span></td>
    
  </tr>
  <tr>
    <td rowspan="3" id="adpic"><img src="Uploaded/<?php echo ucwords($rec['photo_name']);?>"
     style="border-radius:15px; max-height:300px; padding:7px; -webkit-box-shadow:  0px 0px 5px 1px #FFD57D;
        
        box-shadow:  0px 0px 5px 1px #FFD57D; "/></td>
    
    <td class="adbg" ><span style="color:#666;"><?php echo $rec['price']; ?></span><br/>Price </td>
    </tr>
    <tr>
    <td  class="adbg"> <span style="color:#666;"><?php echo $rec['contact_name']; ?></span><br/>Contact name</td>
   
  </tr>

  <tr>
    <td  class="adbg"><span style="color:#666;"><?php echo $rec['m_number']; ?></span><br/>Mobile number</td>
  </tr>
   <tr>
    <td  class="adbg" colspan="2">Description:<br/><span style="color:#666;"><?php echo $rec['description']; ?></span><br/></td>
   
  </tr>
  
</table>
<?php $b++; }
}
?>
</div>

</div>

<?php include("_includes/ender.php"); ?>
<!--<div class="demo-description">
<p>A menu with the default configuration, showing how to use a menu with icons.</p>
</div>-->
</body>
</html>