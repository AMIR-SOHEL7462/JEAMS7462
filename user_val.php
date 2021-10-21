<?php
include("connection/connection.php");



#$result=query($connection,$insert);


if(isset($_POST['button']))
	{
    session_start();  
    $email=$_POST["email"];
	$password=$_POST["password"];
	$select="SELECT * FROM user where email='$email' and password='$password'";
	$result=($connection->query($select));
	$row=mysqli_num_rows($result);

		if($row==1)
			{

   				 $_SESSION['email']=$email; 
   				 header('location:user_index.php'); 
   			}
	}

	else{
			echo "tried it";
	}

?>