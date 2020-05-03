<?php
error_reporting(0);
$base = trim($_GET['sql_base']);
$table = trim($_GET['sql_table']);
$flag_input_base = true;
$error = false;

if (strlen($base) > 0) {
    $flag_input_base = false;
}

if (strlen(trim($_GET['add'])) > 0) {
    $query  = explode('&', $_SERVER['QUERY_STRING']);
    $request = [];

    foreach ($query as $param) {
        list($name, $value) = explode('=', $param, 2);
        array_push($request, trim($value));
    }

    include 'values_sql.php';
    $link = mysqli_connect($host, $name, $password, $request[0]);
    $query = "INSERT INTO " . $request[1] . " VALUES(" . '\'' . $request[2] . '\'';
    for ($i = 3; $i < count($request) - 1; $i++) {
        $query .= ", " . '\'' . $request[$i] . '\'';
    }
    $query .= ")";

    mysqli_query($link, $query);
    $host = "";
    $password = "";
    $name = "";
    mysqli_close($link);
}

if (!$flag_input_base) {
    include 'values_sql.php';
    $link = mysqli_connect($host, $name, $password, $base);
    if (!mysqli_connect_errno()) {
        $sql = "SELECT * FROM " . $table;

        $result = mysqli_fetch_all(mysqli_query($link, $sql));
        $arr = mysqli_fetch_assoc(mysqli_query($link, $sql));

        if (mysqli_query($link, $sql)) {
            $keys = [];
            foreach ($arr as $key => $value) {
                array_push($keys, $key);
            }

            $host = "";
            $password = "";
            $name = "";
        } else {
            $flag_input_base = true;
            $error = true;
        }
    } else {
        $flag_input_base = true;
        $error = true;
    }
    mysqli_close($link);
}
