<?php
include("connection/connection.php");



#$result=query($connection,$insert);


if(isset($_POST['button']))
	{
    session_start();  
    $name=$_POST["name"];
	$password=$_POST["password"];
	$select="SELECT * FROM admin where name='$name' and password='$password'";
	$result=($connection->query($select));
	$row=mysqli_num_rows($result);

		if($row==1)
			{

   				 $_SESSION['name']=$name; 
   				 header('location:admin.php'); 
   			}
	}

	else{
			echo "tried it";
	}

?>