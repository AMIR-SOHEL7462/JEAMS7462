<?php
session_start();
if(!(isset($_SESSION['email'])))
{
    header('Location: index.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: yellow;">

	<a href="logout.php">Logout</a><br><br>

	<?php 
		if($_SESSION['email']!=NULL) 
		{  
   			 echo "name is:".$_SESSION['email']; 
		} 

	?>

</body>
</html>