<?php
if (isset($_POST['submit'])) {
 $name = $_POST['name']; 
 $mailFrom = $_POST['mail']; 
 $message = $_POST['message']; 
 $mailTo = "iftikar.business@gmail.com"; 
 $headers = "From: ".$mailFrom;
  $txt = "You have a message".$name".\n\n".$message;
  
  mail($mailTo,$name,$txt,$headers);
  header("Location: https://edithmark42.github.io/PortfolioProject/?MessageSent);
}


?>
