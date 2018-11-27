<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailTo = "email@davegeorgesmith.com";
$headers = "From: " .$email;
$txt =  "You have recieved an email from " .$email. ".\n\n" .$name. ".\n\n" .$message;

mail($mailTo, $headers, $txt);
header("Location: index.html?mailsend");
}
