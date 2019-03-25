<?php
require_once("../_includes/connection.php");
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
$user_id=$_POST['user_id'];
$person=$_POST['person'];
$food=$_POST['food'];

if($type_photo=="image/jpg" || $type_photo=="image/jpeg" || $type_photo=="image/bmp" || $type_photo=="image/png")
	{
		if(move_uploaded_file($temp_photo,"../uploaded/".$name_photo))
					{
						$query_insert="INSERT INTO `post`.`userad` (`id`, `cat_id`, `ad_title`, `photo_name`, `description`, `price`, `contact_name`, `email`, `m_number`, `address`, `u_name`, `person`, `food`) VALUES (NULL, '$catId', '$ad_title', '$name_photo', '$description', '$price', '$contact_name', '$email', '$m_number', '$address','$user_id','$person','$food')";

						$insertiontodatabase=mysqli_query($connection,$query_insert);
						if($insertiontodatabase)
						{
							header('location:../user/user_thanks.php?msg=Uploding SuccessFull');
							exit;
						}
						else
						{
							header('location:../user/index.php?msg=Uploading Error try again');	
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