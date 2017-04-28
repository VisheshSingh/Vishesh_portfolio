<?php
/*if(empty($_POST['submit'])){
  echo "Form is not submitted";
  exit;
}

if(empty($_POST["fullname"]) || empty($_POST["email"])){
  echo "Please fill in the details";
  exit;
}*/
if(isset($_POST["fullname"]) && isset($_POST["email"])){
  $name = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "visheshsingh16@gmail.com";
  $subject = "Mail from " . $name;
  $body = '<h1>Feedback from Portfolio</h1><hr>
           <p>Name:'.$name.' </p>
           <p>Email:'.$email.' </p>
           <p>Message:'.$message.' </p>';
  //header
  $headers = "MIME-Version: 1.0" . "/r/n";
  $headers .= "Content-Type:test/html;charset=UTF-8" . "/r/n";

  $headers .= "From: " .$name. "<" .$email.">" . "/r/n";

  $send = mail($to, $subject, $body, $headers);

  if($send) {
    echo '<br>';
    echo "Thank for submitting";
  } else {
    echo "error";
  }

}

/*
mail( "visheshsingh16@gmail.com" , "Message from portfolio" , $message, "New form submission: Name: $name, Email: $email" );
header('Location: thank-you.html');*/
?>
