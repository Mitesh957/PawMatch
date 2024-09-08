<?php

$file = 'adoption_requests.txt';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pet = $_POST['pet'];
$reason = $_POST['reason'];


$data = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nPet: $pet\nReason: $reason\n\n";


file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

echo "<h1>Thank you for your submission!</h1><p>We will get back to you shortly.</p>";
?>
