<?php
error_reporting(0);

$flag = false;
$flag_capcha = false;

if ($_POST['send']) {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['text'];

    session_start();
    if (mb_strtolower($_SESSION['capcha']) === mb_strtolower($_POST['capcha'])) {
        $flag_capcha = true;
        $subject = str_replace("\n.", "\n..", $subject);
        $message = str_replace("\n.", "\n..", $message);

        $flag = mail($to, $subject, $message);
    } else {
        $flag = false;
    }
} else {
    $flag_capcha = true;
    $flag = true;
}
