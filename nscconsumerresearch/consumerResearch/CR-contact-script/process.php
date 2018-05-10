<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$from = "<" . $email . ">";
$to = "amber@neriumskincare.com , egutierrez@neriumbiotech.com";
$subject = "Consumer Research Form Submission";
$body =
"First name: {$firstName}
Last name: {$lastName}
From: {$email}
Country: {$country}
Phone: {$phone}
Name of the Nerium product you use: {$product}
Message: {$message}";
mail($to, "Consumer Research Form Submission", $body);
header('Location: ../thanks');
}
else
{
die("Wrong Code Entered");
}

?>
