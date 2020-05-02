<?php
error_reporting(0);

$text = '';
try {
    $text = file_get_contents('../input/input_regex.txt');
} catch (Exception $e) {
    echo 'Press F to pay respect!';
};

$arrOfUrl;
preg_match_all('/(((http|ftp|https):\/\/)?([\w-]+(?:(?:\.[a-zA-Z][\w-]*)+))([\w.,@?^=%&:\/~+#-]*[\w@?^=%&\/~+#-])?|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(; [^\s]*)*/', $text, $arrOfUrl, PREG_OFFSET_CAPTURE);

$openTagUrl1 = '<a href="';
$openTagUrl2 = '" class="URL">';
$closeTagUrl = '</a>';
$offset = 0;

for ($i = 0; $i < count($arrOfUrl[0]); $i++) {
    $insert = $openTagUrl1 . substr($arrOfUrl[0][$i][0], 0, strlen($arrOfUrl[0][$i][0]) - strlen($arrOfUrl[7][$i][0])) . $openTagUrl2;
    $text = substr_replace($text, $insert, $arrOfUrl[0][$i][1] + $offset, 0);
    $text = substr_replace($text, $closeTagUrl, $arrOfUrl[0][$i][1] + $offset + strlen($insert) + strlen($arrOfUrl[0][$i][0]), 0);

    $offset += strlen($insert) + strlen($closeTagUrl);
};

$text = '<pre>' . $text . '</pre>';

$data = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/lab4.css">
    <link rel="stylesheet" href="../css/main.css"> 
    <title>Calendar</title>
</head>
<body>       
    <div class="text">'
    . $text .
    '</div>
    <div class="space_after_text"></div>
</body>
</html>
';

file_put_contents('../output/regex.html', $data, LOCK_EX);
