<?php
mysql_connect("localhost","root","1234") or die("Could not connect.");
mysql_select_db("mydb") or die("Could not find DataBase.");
$output='';
if(isset($_POST['id'])){
 $searchq=$_POST['id'];
 $query=mysql_query("SELECT * FROM studentinfo WHERE Id ='$searchq'") or die ("Could not search");
 $count=mysql_num_rows($query);
 if($count==0){
 $output="There was no search result.";
}
else
{
 while($row=mysql_fetch_array($query)){
 $id=$row['Id'];
 $name=$row['Name'];
 $fname=$row['FatherName'];
 $mname=$row['MotherName'];
 $phone=$row['Phone'];
 $address=$row['Address'];
}
}
}
?>
<!DOCTYPE html>
<html>
      <head>
            <title>
                    Student Page
            </title>
            <link rel="stylesheet" type="text/css" href="teacher page.css">
      </head>
      <body>
           <form action="process11.php" method="post">
                <table align="center">
                    <tr>
                         <td>ID:</td>
                         <td><input type="text" name="id" placeholder="ID" value="<?php echo $id ?>"></td>
                     </tr>
                    <tr>
                         <td>Name:</td>
                         <td><input type="text" name="name" placeholder="Name" value="<?php echo $name ?>"></td>
                     </tr>
<tr>
                         <td>Father Name:</td>
                         <td><input type="text" name="fname" placeholder="Father Name" value="<?php echo $fname ?>"></td>
                     </tr>
<tr>
                         <td>Mother Name:</td>
                         <td><input type="text" name="mname" placeholder="Mother Name" value="<?php echo $mname ?>"></td>
                     </tr>
                     <tr>
                          <td>Address:</td>
                          <td><input type="text" name="address" placeholder="Address" value="<?php echo $address ?>"></td>
                     </tr>
                     <tr>
                          <td>Phone:</td>
                          <td><input type="tel" name="phone" placeholder="Phone" value="<?php echo $phone ?>"></td>
                     </tr> 
                     <tr>
                          <td></td>
                          <td><input type="submit" id="btn" value="Update"></td>
                     </tr> 
                      
      </body>
</html>