<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$from = "<" . $email . ">";
$to = "amber@neriumskincare.com , egutierrez@neriumbiotech.com , whitemichael646@gmail.com";
$subject = "Consumer Research Form Submission";
$body =
"Full name: {$name}
From: {$email}
Phone: {$phone}
Address: {$address}
State: {$state}
Zipcode: {$zipcode}";
mail($to, "Consumer Research Form Submission", $body);
header('Location: ../../thanks');
}
else
{
die("Wrong Code Entered");
}

?>
