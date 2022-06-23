<?php


  // Replace contact@example.com with your real receiving email address
//  $conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
// mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
// $insert_id = mysqli_insert_id($conn);
// if(!empty($insert_id)) {
// $message = "Your contact information is saved successfully";
//   $receiving_email_address = 'pauulkolapo8@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

 filter_input_array(name) $name = $_POST['name'];
  filter_input_array(email)$email = $_POST['email'];
  filter_input_array(test)$subject = $_POST['subject'];
  filter_input_array(test)$message = $_POST['message'];

  //database connection
  $conn = new mysqli('localhost', 'root', '', 'test');
  if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into contact(name, email, subject, message")
      values(?, ?, ?, ?,)
  }
  ?>
