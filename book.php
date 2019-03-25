<?php require_once("_includes/connection.php"); ?>
<?php require_once("_includes/functions.php"); ?>
<?php $msg='';
$entry_id= '';
if(isset($_GET['name']) && $_GET['name']!='')
{
  $msg=$_GET['name'];
} ?>
<?php find_selected_page(); ?>

<?php
if(isset($_GET['entry_id']) && $_GET['entry_id']!='')
{
  $entry_id=$_GET['entry_id'];
} ?>
<?php $query="Select * from userad where id=$entry_id ";
$userad=mysqli_query($connection,$query);

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Ads </title>
  <link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
  <link href="_css/header.css" rel="stylesheet" type="text/css">
  <link  href="_css/foot.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="_css/signup.css" />
  
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
    <td rowspan="5" id="adpic"><img src="Uploaded/<?php echo ucwords($rec['photo_name']);?>"
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

  <tr>
    <td  class="adbg" colspan="1">Description:<br/><span style="color:#666;"><?php echo $rec['description']; ?></span><br/></td>
  </tr>
</table>
<?php $k++; }
}
?>

<div id="signupbody">
<div id="signininimage">
<span style="color:#FF3737; padding-bottom:10px; line-height:40px; font-family:Verdana, Geneva, sans-serif; font-size:14px;" ><?php echo $msg;?></span>

  </div>
<div id="sheading">
  <p> Fill all the credentials to book the above couch</p>
</div>
<div id="textfeildbg">
<form name="signin" method="post" action="bookpros.php">
  <input name="f_name" type="text" placeholder="First name" maxlength="60" id="textfeilds" required="required" >
    
    <input name="l_name" type="text" placeholder="Last name" maxlength="50" id="textfeilds" required="required">
    
    <input name="u_email" type="email" placeholder="Email Address" maxlength="50" id="emailfeilds"  required="required">
    
    <input name="mobile" type="text" placeholder="Mobile No" maxlength="50" id="textfeilds" required="required">
    
    <input name="uid" type="text" placeholder="UID" maxlength="50" id="textfeilds" required="required" />

  <?php echo '<input type="hidden" value='.$entry_id.' name="entry_id" />'; ?>
  <input type="submit" id="submit" value="Book " >

  <a href="index.php"  id="forget">Return to homepage</a>

</form>

</div>

</div>

<?php include("_includes/ender.php"); ?>
<!--<div class="demo-description">
<p>A menu with the default configuration, showing how to use a menu with icons.</p>
</div>-->
</body>
</html>