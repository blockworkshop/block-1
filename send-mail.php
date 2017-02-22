<?php

$to = 'olga.romanovskaya95@gmail.com, 4i4erina88@gmail.com'; // Change your email address


$name = $_POST['name'];
$subject = $_POST['subject'];
// $email = $_POST['email'];
$message = $_POST['message'];


// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
 if ( isset($name) && isset($subject) && isset($message) ) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$body = <<<EMAIL
Телефон : $subject
  
Имя: $name.

Сообщение:$message


EMAIL;
  
  
$header = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  //
 // mail( $to , $_POST['subject'], $_POST['message'], $headers );
 mail($to, $subject, $body, $header);
  //      ^
  //  Replace with your email 
}
?>