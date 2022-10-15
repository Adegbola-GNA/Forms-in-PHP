<?php
$name = $_POST[ 'name' ] ;

$email = $_POST[ 'email' ] ;

$birthday = $_POST[ 'birthday' ] ;

$gender = $_POST[ 'gender' ] ;

$country = $_POST[ 'country' ] ;

$text = [$name, $email, $birthday, $gender,
$country, " \n"];

$handle = fopen('./userdata.csv', 'a');

fputcsv($handle, $text);

print_r($_POST);

fclose($handle);
?>
