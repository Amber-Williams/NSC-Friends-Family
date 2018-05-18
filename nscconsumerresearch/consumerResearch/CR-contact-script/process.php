<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$advDayNight =$_POST['advDayNight'];
$rxColdSore =$_POST['rxColdSore'];
$rxPS =$_POST['rxPS'];
$rxDermal =$_POST['rxDermal'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$from = "<" . $email . ">";
$to = "amber@neriumskincare.com , egutierrez@neriumbiotech.com , whitemichael646@gmail.com";
$subject = "Consumer Research Form Submission";
$body =
"
Advanced Day and Night Survey: {$advDayNight}


RX Cold Sore Survey: {$rxColdSore}


RX Psorasis Survey: {$rxPS}


RX Dermal Pain Survey: {$rxDermal}


Full name: {$name}
From: {$email}
Phone: {$phone}
Address: {$address}
City: {$city}
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
