<?php

$rndno = rand(100000, 999999); //OTP generate
$message = urlencode("otp number." . $rndno);
// echo($_GET["email"]);
if (! empty($_GET["email"])) {

$to = $_GET["email"];
$subject = "Access OTP ";
$txt = "OTP: " . $rndno . "";
$headers = "From: clubtermoo@gmail.com" . "\r\n" .
    "CC: garvitsolanki5@gmail.com";
mail($to, $subject, $txt, $headers);

echo $rndno ;
}

/* echo "please enter your email address"; */

?>