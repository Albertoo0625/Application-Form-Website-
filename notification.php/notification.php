<?php
include_once 'database.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$country_of_birth = $_POST['country_of_birth '];
$email = $_POST['email'];

/* sql query for inserting data into database */

mysqli_query($conn,"insert into employee (first_name,last_name,country_of_birth ,email) values ('$first_name','$last_name','$country_of_birth ','$email')") or die(mysqli_error());
require_once 'mailer/class.phpmailer.php';
/* creates object */
$mail = new PHPMailer(true);
$mailid = $email;
$subject = "Thank you for your application";
$text_message = "Hello";
$message = "Dear[last name,first name],Your application has been  successfully submitted for [course one applied].Please await the outcome in two weeks time.Your registrar";
