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
$address=$_POST['address'];
$phone = $_POST['phone'];
$sql = "INSERT INTO `teacherinfo`(`Id`, `Name`, `Phone` ,`address`) VALUES ('$id','$name','$phone','$address')";
if(!mysqli_query($con,$sql))
{
 header("location:sucess.html");  
}
else{
 header("location:error.html");  
}
?>