<?php

$price = 50;

$msg = "First line of text\nPrice " . $price;
$msg = wordwrap($msg,70);

mail("ung_david@yahoo.com", "ETES Ticket Purchase Receipt", $msg);


$to = "ung_david@yahoo.com";
$subject = "ETES Ticket Purchase Receipt";
$txt = "Hello world!";
$headers = "From: webmaster@etes.com";

mail($to, $subject, $msg, $headers);
?>