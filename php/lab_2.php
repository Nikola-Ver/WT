<?php
$userInput = trim($_GET['userInput']);
$words = explode(',', $userInput);

for ($i = 0; $i < (int) (count($words) / 2); $i++) {
    $temp = trim($words[$i]);
    $words[$i] = trim($words[count($words) - $i - 1]);
    $words[count($words) - $i - 1] = $temp;

    if ($i === 0) {
        $masOfWords1 = str_split($words[$i]);
        $masOfWords1[0] = mb_strtoupper($masOfWords1[0]);
        $words[$i] = implode('', $masOfWords1);
        $words[0] = str_replace('.', '', $words[0]);

        $masOfWords2 = str_split($words[count($words) - 1]);
        $masOfWords2[0] = mb_strtolower($masOfWords2[0]);
        $words[count($words) - 1] = implode($masOfWords2);
    }
}

$answer = implode(', ', $words);
$answer = $answer . '.';
echo $answer;
