<?php


$botToken = "263424252:AAHcyodZThi0As-yF2yFqjjxt6SqHMBXrhk";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

print_r($update)

?>