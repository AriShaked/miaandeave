<?php

$name=$_POST['name'];
$email = $_POST['email'];
$message =$_POST['message'];    
$to = 'arishaked10@gmail.com';
$subject = 'new message from mia website';

echo $name;
echo $email;
echo $message;

mail($to,$subject,$message);


//header("Location: http://localhost/index.html");

?>  