<?php
$url = basename($_SERVER['PHP_SELF']);
$url = str_replace('.php', '', $url);
$background = null;
switch ($url) {
    case 'main':
        $background = 'linear-gradient(180deg, #085675, #0d8686)';
        break;

    case 'php':
        $background = 'linear-gradient(180deg, #e8e8e8, #2acece)';
        break;

    case 'js':
        $background = 'linear-gradient(180deg, #e8e8e8, #2acece)';
        break;

    case 'html':
        $background = 'linear-gradient(180deg, #e8e8e8, #2acece)';
        break;

    case 'css':
        $background = 'linear-gradient(180deg, #e8e8e8, #2acece)';
        break;

    default:
        $background = 'linear-gradient(180deg, #e8e8e8, #2acece)';
}
