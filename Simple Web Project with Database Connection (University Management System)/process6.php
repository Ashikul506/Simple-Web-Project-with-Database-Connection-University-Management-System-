<?php
mysql_connect("localhost","root","1234") or die("Could not connect.");
mysql_select_db("mydb") or die("Could not find DataBase.");
$output='';
if(isset($_POST['id'])){
 $searchq=$_POST['id'];
 $query=mysql_query("SELECT * FROM marks WHERE Id ='$searchq'") or die ("Could not search");
 $count=mysql_num_rows($query);
 if($count==0){
 $output="There was no search result.";
}
else
{
 while($row=mysql_fetch_array($query)){
 $id=$row['Id'];
 $bangla=$row['Bangla'];
 $english=$row['English'];
 $math=$row['Math'];
 $ict=$row['ICT'];
}
}
}
?>

<!DOCTYPE html>
<html>
      <head>
            <title>
                    Marks Page
            </title>
            <link rel="stylesheet" type="text/css" href="fresult.css">
      </head>
      <body>
           <form method="post">
                <table align="center">
                     <tr>
                         <td><b>Bangla:</td>
                         <td><input type="text" name="bangla" placeholder="Number" value="<?php echo $bangla ?>"></td>
                     </tr>
                     <tr>
                          <td><b>English:</td>
                          <td><input type="text" name="english" placeholder="Number" value="<?php echo $english ?>"></td>
                     </tr>
<tr>
                         <td><b>Math:</td>
                         <td><input type="text" name="math" placeholder="Number" value="<?php echo $math ?>"></td>
                     </tr>
                     <tr>
                          <td><b>ICT:</td>
                          <td><input type="text" name="ict" placeholder="Number" value="<?php echo $ict ?>"></td>
                     </tr>
                      
      </body>
</html>