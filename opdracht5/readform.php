<?php

// define variables
$to = "24893@ma-web.nl";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

// send email
mail($to,$subject,$message,$headers);

// print the text
echo "E-Mail sent!";

