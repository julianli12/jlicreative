<?php

if(!empty($_POST['contact']) && !empty($_POST['name'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@jlicreative.com";
    $email_subject = "Inquery";

    function died($error) {
        // your error code can go here
        echo '<div class="alert alert-danger alert-dismissible" role="alert">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        echo '<p>' .$error. '</p>';
        echo '</div>';
        die();
    }


    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['contact']) ||
        !isset($_POST['services']) ||
        !isset($_POST['message']))
    {
        died('Sorry, there appears to be a problem with your submission. Please fill in all the fields.');
    }



    $name = $_POST['name']; // required
    $contact = $_POST['contact']; // required
    $service = $_POST['service']; // not required
    $message = $_POST['message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';


    $string_exp = "/^[A-Za-z .'-]+$/";


    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($name)."\n";
    $email_message .= "contact: ".clean_string($contact)."\n";
    $email_message .= "service: ".clean_string($service)."\n";
    $email_message .= "message: ".clean_string($message)."\n";

    $email_from = "website";

  // create email headers
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();

  @mail($email_to, $email_subject, $email_message, $headers);



  echo '<div class="alert alert-success alert-dismissible" role="alert">';
  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
  echo '<p>Thank You for contacting us! We will be in touch with you very soon.</p>';
  echo '</div>';
}


?>
