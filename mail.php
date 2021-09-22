<?php header("Location: http://ericreger.com/thankyou.html");
  if($_POST) {
    print_r($_POST);

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    mail("ericreger0@gmail.com", "$fname $lname sent you a message on 'your website'", "$message");
  }
?>