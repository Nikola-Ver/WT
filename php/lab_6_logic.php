<?php
error_reporting(0);
$email = trim($_POST['email']);
$password_user = $_POST['password'];
$reg = $_POST['new_reg'];
$come_in = $_POST['come_in'];
$change_page = $_POST['change_page'];

$time_session = 3600;

$back_url = $_SERVER['HTTP_REFERER'];
include 'values_sql.php';
$link = mysqli_connect($host, $name, $password, $base);

if (strlen($change_page) === 0) {
    if (!mysqli_connect_errno() && strlen($reg) > 0) {
        $query = "INSERT INTO " . $table . " VALUES(" . '\'' . $email . '\'' . ", " . '\'' . $password_user . '\'' . ")";
        mysqli_query($link, $query);
    } else {
        if ($come_in) {
            $query = "SELECT * FROM " . $table . " WHERE email = " . '\'' . $email . '\'' . " AND password = " . '\'' . $password_user . '\'';
            if (mysqli_fetch_all(mysqli_query($link, $query))) {
                setcookie("Authorized", true, time() + $time_session);
            } else {
                session_start();
                $_SESSION['style'] = '';
                session_destroy();
                setcookie("Authorized", true, time() - $time_session);
            }
        } else {
            session_start();
            session_unset($_SESSION['style']);
            session_destroy();
            setcookie("Authorized", true, time() - $time_session);
        }
    }

    $host = "";
    $password = "";
    $name = "";
    $base = "";
    $table = "";
    mysqli_close($link);
} else {
    session_start();
    $background_color = $_POST['background_color'];
    $main_font_color = $_POST['main_font_color'];
    $head_font_color = $_POST['head_font_color'];
    $link_font_color = $_POST['link_font_color'];
    $main_font_size = $_POST['main_font_size'];
    $head_font_size = $_POST['head_font_size'];
    $link_font_size = $_POST['link_font_size'];

    $_SESSION['style'] = '
        body {
            background-color: ' . $background_color . ' !important; 
        }

        .content_box {
            background-color: ' . $background_color . ' !important; 
        }
        
        p {
            -webkit-text-fill-color: ' . $main_font_color . ' !important;
            font-size: ' . $main_font_size . 'px !important;
        }

        input {
            -webkit-text-fill-color: ' . $main_font_color . ' !important;
            font-size: ' . $main_font_size . 'px !important;
        }
        
        h1 {
            -webkit-text-fill-color: ' . $head_font_color . '!important;
            font-size: ' . $head_font_size . 'px !important;
        }
            
        a {
            -webkit-text-fill-color: ' . $link_font_color . '!important;
            font-size: ' . $link_font_size . 'px !important;
        }

        span {
            -webkit-text-fill-color: ' . $link_font_color . '!important;
            font-size: ' . $link_font_size . 'px !important;
        }';
}

header("Refresh: 0; '$back_url'");
exit();
