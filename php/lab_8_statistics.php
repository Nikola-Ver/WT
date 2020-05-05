<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("j F Y H:i:s");

include 'values_sql.php';
$link = mysqli_connect($host, $name, $password, $base);
if (!mysqli_connect_errno()) {
    $query = "INSERT INTO " . $table . " VALUES(" . '\'' . $ip . '\'' . ", " . '\'' . $time . '\'' . ")";
    mysqli_query($link, $query);
}

mysqli_close($link);
