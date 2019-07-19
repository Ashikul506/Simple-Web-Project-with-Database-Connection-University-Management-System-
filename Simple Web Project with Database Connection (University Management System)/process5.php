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
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$address=$_POST['address'];
$phone = $_POST['phone'];
$sql = "INSERT INTO `studentinfo`(`Id`, `Name`,`FatherName`, `MotherName`, `Phone` ,`Address`) VALUES ('$id','$name','$fname','$mname','$phone','$address')";
if(!mysqli_query($con,$sql))
{
 header("location:sucess.html");  
}
else{
 header("location:error.html");  
}
?>