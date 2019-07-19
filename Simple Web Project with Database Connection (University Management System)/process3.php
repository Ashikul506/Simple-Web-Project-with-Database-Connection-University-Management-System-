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
$bangla=$_POST['bangla'];
$english=$_POST['english'];
$math=$_POST['bangla'];
$ict=$_POST['ict'];
$sql = "INSERT INTO `marks`(`Id`, `Bangla`, `English` ,`Math` ,`ICT`) VALUES ('$id','$bangla','$english','$math','$ict')";
if(!mysqli_query($con,$sql))
{
 header("location:sucess.html");  
}
else{
 header("location:error.html");  
}
?>