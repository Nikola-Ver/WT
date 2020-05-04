<?php
$back_url = $_SERVER['HTTP_REFERER'];

$msg = $_POST['text'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$emailSender = "";
$name = "";


header("Refresh: 0; '$back_url'");
exit();
