<?php

$nom = $_POST['name'];
$email = $_POST['email'];
$mtp = $_POST['password'];
$card_type = $_POST['card_type'];
$card_number = $_POST['card_number'];
$card_date = $_POST['expiration_date'];
$ace = $_POST['Ace'];
$king = $_POST['King'];
$quen = $_POST['Quen'];

$list = array (
   array('Title:', $ace,$king,$quen),
   array('Name', $nom),
   array('Email:', $email),
   array('Password:', $mtp),
   array('Card-Type:', $card_type ),
   array('Card-Number:', $card_number ),
   array('Card-Date:', $card_date)

);

$fp = fopen('registrations.csv', 'a');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

header("location: listRegistration.php");
?>