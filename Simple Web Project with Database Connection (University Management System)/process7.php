<?php
   $username = $_POST['user'];
   $password = $_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);

   mysql_connect("localhost","root","1234");
   mysql_select_db("mydb");

   $result = mysql_query("select * from adminlogin where username='$username' and password='$password'")
       or die ("Failed to query database".mysql_error());
   $row = mysql_fetch_array($result);
   if($row['username'] == $username && $row['password'] == $password){
       header("location:admin decission page.html");
   }
   else {
        header("location:error.html");   
}
?>