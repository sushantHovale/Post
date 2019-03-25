<?php
require_once("connection.php");
if(isset($_POST['post']) && $_POST['post']=="mmm")
{
$catId=$_POST['cat_id'];
$ad_title=$_POST['ad_title'];
$name_photo=$_FILES['photo']['name'];
$size_photo=$_FILES['photo']['size'];
$type_photo=$_FILES['photo']['type'];
$error_photo=$_FILES['photo']['error'];
$temp_photo=$_FILES['photo']['tmp_name'];
$description=$_POST['description'];
$price=$_POST['price'];
$contact_name=$_POST['contact_name'];
$email=$_POST['email'];
$m_number=$_POST['m_number'];
$address=$_POST['address'];

if($type_photo=="image/jpg" || $type_photo=="image/jpeg" || $type_photo=="image/bmp" || $type_photo=="image/png")
	{
		if(move_uploaded_file($temp_photo,"../uploaded/".$name_photo))
					{
						$query_insert="INSERT INTO `post`.`freead` (`id`, `cat_id`, `ad_title`, `photo_name`, `description`, `price`, `contact_name`, `email`, `m_number`, `address`) VALUES (NULL, '$catId', '$ad_title', '$name_photo', '$description', '$price', '$contact_name', '$email', '$m_number', '$address')";
						//echo $query_insert="INSERT INTO `post`.`freead` SET `id`='',`cat_id`='$gettingid',`ad_title`='$ad_title', `photo_name`='$name_photo', `description`='$description', `price`='$price', `contact_name`='$contact_name', `email`='$email', `m_number`='$m_number', `address`='$address'";
						$insertiontodatabase=mysql_query($query_insert);
						if($insertiontodatabase)
						{
							header('location:../thankspost.php?msg=Uploding SuccessFull');
							exit;
						}
						else
						{
							header('location:post.php?msg=Uploading Error');	
						}
					}
					else
					{
						header('location:post.php?msg=Uploading Failed.');
						exit;
					}
	}
	else
	{
		header("location:post.php?msg=Sorry Invalid Type Image!");
		exit;
	}
}
?>