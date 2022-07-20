// Pear Mail Library
<?php require_once "Mail.php";

//Specify the message recipient: 
$from = '<beton77.ru>';
$to = '<leetio19@gmail.ru>';
$field_name = $_POST['cf-name'];
$field_email = $_POST['cf-email'];
$field_message = $_POST['cf-message'];
$subject = 'Message from a site visitor '.$field_name;

//The email content:
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
$body = $body_message;

$headers = array(
'From' => $from,
'To' => $to,
'Subject' => $subject
);
// SMTP Google Settings
$smtp = Mail::factory('smtp', array(
'host' => 'ssl://smtp.jino.ru',
'port' => '587',
'auth' => true,
'username' => 'beton@beton77.ru',
'password' => 'Ibrae2022'
));

$mail = $smtp->send($to, $headers, $body);

//Show a javascript message about the successful or unsuccessful sending a message 
if (PEAR::isError($mail)) {
     $resArray= array('success' => true);
     header('Content-Type: application/json');
     echo json_encode($resArray);
} else {
     $resArray= array('success' => false);
     header('Content-Type: application/json');
     echo json_encode($resArray);
}
?>