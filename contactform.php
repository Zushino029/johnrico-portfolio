<?php 
     if (isset($_POST['submit'])) {

      $name = $_POST['name'];
      $mailFrom = $_POST['email'];
      $message = $_POST['message'];


     $mailTo ="johnricopugeda029@gmail.com";
    $headers = "From : My Portfolio ";
    $txt =" You have receieved an e-mail from". $name.".\n\n. $message";
  
   mail($mailTo, $headers, $txt);

     header("Location: index.php?mailsend");


     }




?>
