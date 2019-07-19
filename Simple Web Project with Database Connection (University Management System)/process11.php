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
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql = "UPDATE `studentinfo` SET `Name`='$name',`FatherName`='$fname',`MotherName`='$mname',`Phone`='$phone',`Address`='$address' WHERE `Id`= $id";
if(mysqli_query($con,$sql))
{
 header("location:sucess.html");  
}
else{
 header("location:error.html");  
}
?>