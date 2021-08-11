<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace Kontak@example.com with your real receiving email address
  $receiving_email_address = 'Kontak@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $Kontak = new PHP_Email_Form;
  $Kontak->ajax = true;
  
  $Kontak->to = $receiving_email_address;
  $Kontak->from_name = $_POST['name'];
  $Kontak->from_email = $_POST['email'];
  $Kontak->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $Kontak->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $Kontak->add_message( $_POST['name'], 'From');
  $Kontak->add_message( $_POST['email'], 'Email');
  $Kontak->add_message( $_POST['message'], 'Message', 10);

  echo $Kontak->send();
?>
