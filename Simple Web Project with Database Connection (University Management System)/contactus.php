<?php
   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $message = $_POST['message'];

   $email_from = 'ashikkhan009@yahoo.com';
   $email_subject = "New from Submission";
   $email_body = "User Name: $name.\n".
                   "User Email: $visitor_email.\n".
                     "User Message: $message.\n";
   $to = "islam15-5638@diu.edu.bd";
   $headers = "From: $email_from \r\n";
   $headers = "Reply-To: $visitors_email \r\n";
   mail($to,$email_subject,$email_body,$headers);
   header("Location: index.html");
?>