<?php
//Actual code to be used, error in submitting form

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $number = $_POST['number'];
  $side = $_POST['side'];
  $songs = $_POST['songs'];

  $mailTo = "ramandeep-singh25@outlook.com, jasminewedskuljeet@gmail.com, jazz_bedi@yahoo.ca";
  $subject = "RSVP form submission";
  $headers = "From: ".$mailFrom;
  $body = "Name: ".$name."\n
          Their e-mail: ".$mailFrom."\n
          Number of people attending: ".$number."\n
          Groom vs Bride side: ".$side."\n
          Song suggestions: \n".$songs;
  
  mail($mailTo, $subject, $body, $headers);
  header("Location: index.html?mailSent");  
}

//headers("Location: index.html?mailsent");

/*if(mail($mailTo, $subject, $body, $headers)){
    echo "<h1>Sent sucessfully! Thank you ".$name."</h1>";
  }
  else{
    echo "Something went wrong. Please try again...";
  }*/



/*$body = "Name: ".name."\n
          Their e-mail: ".mailFrom."\n
          Number of people attending: ".number."\n
          Groom vs Bride side: ".side."\n
          Song suggestions: ".songs; */

?>