<?php
error_reporting(0);
$back_url = $_SERVER['HTTP_REFERER'];

header("Refresh: 0; '$back_url'");
exit();
