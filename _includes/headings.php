<?php 	require_once("../_includes/connection.php");?>
<?php require_once("../_includes/functions.php"); ?>
<?php
	if (isset($_GET['subj'])) {
		$sel_subj = $_GET['subj'];
		$sel_page = "";
	} elseif (isset($_GET['page'])) {
		$sel_subj = "";
		$sel_page = $_GET['page'];
	} else {
		$sel_subj = "";
		$sel_page = "";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.ullist{}
.ullist li{ font-size:16px;
	font-family:"Times New Roman";
	list-style-image:url(../_images/categoryimage.png);
	
}
.ullist li a{
	color:9958f1;
	text-decoration:none;
	
}
.ullist li a:hover{
	font-weight:bold;
}

.heading{
	color: #0865c1;
	font-size: 22px;
	text-align: left;
	padding-left: 7px;
	font-family: "Times New Roman";
	list-style-type: none;
}
.heading a{
	text-decoration: none;
	
}
</style>
</head>

<body>
<div class="heading" >

		
        <?php
		$subject_set = get_all_subjects();
		while ($subject = mysql_fetch_array($subject_set)) {
			echo "<li";
			if ($subject["id"] == $sel_subj) { echo " class=\"selected\""; }
			echo "><a href=\"#?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["title"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			echo "<ul class=\"ullist\">";
			while ($page = mysql_fetch_array($page_set)) {
				echo "<li";
				if ($page["id"] == $sel_page) { echo " class=\"\""; }
				echo "><a href=\"content.php?page=" . urlencode($page["id"]) .
					"\">{$page["sub_title"]}</a></li>";
			}
			echo "</ul>";
		}

		?>

	
            
    </ul>

</div>
</body>
</html>