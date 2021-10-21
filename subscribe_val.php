<?php
error_reporting(0);
include("connection/connection.php");


$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$pack= $_POST['pack'];
$password= $_POST['password'];



$select="SELECT * FROM user where email='$email'";
$insert="INSERT INTO user set  name='$name',email='$email',mobile='$mobile',pack='$pack',password='$password'";
$result=($connection->query($select));
#$result=query($connection,$insert);
$row=mysqli_num_rows($result);
if($row>0)

{
   echo "user already exits!!";
    
}
    else
{
     $connection->query($insert);
     header('Location: index.html');


}

?>