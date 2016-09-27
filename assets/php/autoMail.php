<?php

$Name = $_POST["Name"];
$EmailId = $_POST["Email"];
$Number1 = $_POST["Number1"];
$Number2 = $_POST["Number2"];
$Address = $_POST["Address"];

$headers = "From: mail@umangmahilatailors.org" . "\r\n" .
"CC: sarathvalia@gmail.com";
// the message
$msg = nl2br("Name: " . $Name ."\n Email ID: " . $EmailId . "\n Primary Number: " . $Number1 . "\n Seconadry Number: " . $Number2 . "\n Address: " . $Address);

// send email
mail("order@umangmahilatailors.org","Email Order",$msg,$headers);

// redirect
header("Location:http://www.umangmahilatailors.org/order_placed.html");
?>
