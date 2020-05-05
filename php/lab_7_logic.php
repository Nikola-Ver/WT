<?php
$flag = false;
if (isset($_POST['send'])) {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['text'];

    $flag = mail($to, $subject, $message);
}
