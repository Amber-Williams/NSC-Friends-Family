<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$advDay =$_POST['advDay'];
$advNight =$_POST['advNight'];
$rxColdSore =$_POST['rxColdSore'];
$rxPS =$_POST['rxPS'];
$rxDermal =$_POST['rxDermal'];
$acne =$_POST['acne'];
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
"Advanced Day Cream Survey: {$advDay}

Advanced Night Cream Survey: {$advNight}

RX Cold Sore Survey: {$rxColdSore}

RX Psorasis Survey: {$rxPS}

RX Dermal Pain Survey: {$rxDermal}

Acne Survey: {$acne}


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
