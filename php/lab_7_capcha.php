<?php
error_reporting(0);
$width = 300;
$height = 70;
$countLettters = rand(4, 9);
$fontSize = 30;
$countBlurLetters = 100;
$fontSizeBlurLetters = 5;
$fonts = scandir("../fonts");
$pathAddrFonts = realpath('../') . '\fonts\\';

$letters = 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890qwertyuiopasdfghjklzxcvbnm';

$img = imagecreatetruecolor($width, $height);
$backgroundColor = imagecolorallocate($img, 220, 220, 220);
imagefill($img, 0, 0, $backgroundColor);
$capcha = '';

if (count($fonts) !== 2) {
    for ($i = 0; $i < $countLettters; $i++) {
        $r = rand(0, 255);
        while ($r > 180) $r = rand(0, 255);
        $g = rand(0, 255);
        while ($g > 180) $g = rand(0, 255);
        $b = rand(0, 255);
        while ($g > 180) $g = rand(0, 255);

        $color = imagecolorallocate($img, $r, $g, $b);
        $fontNum = rand(2, count($fonts));
        $letter = $letters[rand(0, strlen($letters))];
        imagettftext($img, $fontSize, rand(-20, 20), $fontSize * $i, 50, $color, $pathAddrFonts . $fonts[$fontNum], $letter);
        $capcha .= $letter;
    }

    for ($i = 0; $i < $countBlurLetters; $i++) {
        $r = rand(0, 255);
        while ($r > 210) $r = rand(0, 255);
        $g = rand(0, 255);
        while ($g > 210) $g = rand(0, 255);
        $b = rand(0, 255);
        while ($g > 210) $g = rand(0, 255);

        $color = imagecolorallocate($img, $r, $g, $b);
        $fontNum = rand(2, count($fonts));
        $letter = $letters[rand(0, strlen($letters))];
        imagettftext($img, $fontSizeBlurLetters, rand(-180, 180), rand(0, $width), rand(0, $height), $color, $pathAddrFonts . $fonts[$fontNum], $letter);
    }

    session_start();
    $_SESSION['capcha'] = $capcha;

    header("Content-type: image/gif");

    imagegif($img);
} else {
    echo 'Отсутвуют шрифты!';
}
