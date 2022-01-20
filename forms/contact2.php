<?php
   $to = 'k.iyer@ufl.edu';
   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
   $from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
   $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
  
  // Additional headers 
  $headers = 'From: '.$name.'<'.$from.'>'; 
   
  // Send email 
  if(mail($to, $subject, $message, $headers)){ 
     echo 'Email has sent successfully.'; 
  }else{ 
     echo 'Email sending failed.'; 
  }

////
?>
