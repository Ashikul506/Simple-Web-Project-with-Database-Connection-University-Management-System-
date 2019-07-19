<?php
$servername = "localhost";
$username="root";
$password="1234";
$dbname="mydb";
$con = mysqli_connect($servername, $username,$password,$dbname);
if($con){
echo("successful in connection.");
}
else{
echo("error in connection.");
}
$id=$_POST['id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql = "UPDATE `teacherinfo` SET `Name`='$name',`Phone`='$phone',`address`='$address' WHERE `Id`= $id";
if(mysqli_query($con,$sql))
{
 header("location:sucess.html");  
}
else{
 header("location:error.html");  
}
?>