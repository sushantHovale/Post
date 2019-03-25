 ,<?php
require_once("_includes/connection.php");
if(isset($_POST['entry_id']) )
{
	$firstname=($_POST['f_name']);
	$lastname=($_POST['l_name']);
	$email=($_POST['u_email']);
	$mobile=($_POST['mobile']);
	$uid=($_POST['uid']);
	$entry_id=$_POST['entry_id'];

	$query_check="SELECT * from userad WHERE id='$entry_id'";
	$res_check=mysqli_query($connection,$query_check);
	$rec=mysqli_fetch_array($res_check);
	$check_recs=$rec['person_avl'];
	if($check_recs>0)
		{
								$query= "INSERT INTO useradbook (id,f_name,l_name,u_email,mobile,uid,person) VALUES 								('$entry_id','$firstname','$lastname','$email','$mobile','$uid','1')";

	
								$queryInsertion=mysqli_query($connection,$query);
								if($queryInsertion)
								{
									$updte = $check_recs - 1;
									$query= "UPDATE userad SET person_avl='$updte' WHERE id='$entry_id' "; 
	
								$queryInsertion=mysqli_query($connection,$query);
										
									header("location:thanksbook.php?");
									exit;
								}
										else
											{
											header("location:book.php?name=Something went wrong please try again & entry_id=$entry_id ");
											exit;

/*										echo $firstname, $lastname, $email, $mobile, $uid ,$entry_id ;
*/											}
	
		}
		else{
			header("location:book.php?name=house you are booking for already booked & entry_id=$entry_id");	
		}

}
?>