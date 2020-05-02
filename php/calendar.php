<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/lab3.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/hat.js"></script>
    <script src="../js/registration.js"></script>
    <?php include 'logic.php'; ?>
    <?php include 'calendar_logic.php'; ?>
    <title>Calendar</title>
</head>

<body>
    <div class="main_hat" style="background: <?php echo $background ?>">
        <a href="main.php">
            <img src="../picture/MainIcon.png" class="icon_hat" />
            <img src="../picture/effect.gif" class="effect_hat" />
        </a>
        <a class="website_name" href="main.php">Comet</a>
        <div class="searchBlock">
            <img src="../picture/search.png" class="magnifier" />
            <input type="search" class="searchText" />
        </div>
        <img src="../picture/user.png" alt="Фото" class="user_icon" onmouseover="userPropertyOn()" onmouseout="userPropertyOff()" />
    </div>

    <div class="users_property" onmouseover="userPropertyOn_()" onmouseout="userPropertyOff()">
        <p class="user_log" onclick="userEnteryOn(true)">
            Войти
        </p>
        <p class="user_reg" onclick="userEnteryOn(false)">
            Регистрация
        </p>
    </div>

    <div class="user_enter_block" style="visibility: hidden;" onclick="userEnteryOff()">
        <form class="div_reg_log">
            <p class="heading" id="reg_head" onclick="flagEnteryOn()">
                Авторизация
            </p>
            <input name="login" type="email" class="reg_log" onclick="flagEnteryOn()" />
            <input name="password" type="password" class="reg_pas" onclick="flagEnteryOn()" />
            <img src="../picture/no_eye.png" class="pas_eye" onclick="changeEye(), flagEnteryOn()" />
            <input name="send" type="submit" value="Войти" class="heading" id="but_send" onclick="flagEnteryOn()" />
        </form>
    </div>

    <form action="calendar.php" method="GET" class="lab_3_form">
        <p class="main_text">Введите год</p>
        <input type="number" name="year" class="input_year" value="<?php echo $year; ?>" />
        <div class="input_block">
            <input type="submit" name="create" value="Cоздать" class="input_submit" />
            <input type="submit" name="save" value="Сохранить" class="input_submit" />
        </div>
    </form>

    <div class="table_group">
        <?php echo $calendar; ?>
    </div>

    <div class="space_after_calendar"></div>

    <div class="lab_tasks">
        <a class="task" href="calendar.php">
            <img src="../picture/calendar.png" class="img_tasks" title="3 лаба (календарь)">
        </a>

        <a class="task" href="regex.php">
            <img src="../picture/regex.png" class="img_tasks" title="4 лаба (регулярные выражения)">
        </a>

        <a class="task" href="">
            <img src="../picture/calendar.png" class="img_tasks" title="5 лаба (календарь)">
        </a>

        <a class="task" href="">
            <img src="../picture/calendar.png" class="img_tasks" title="6 лаба (календарь)">
        </a>

        <a class="task" href="">
            <img src="../picture/calendar.png" class="img_tasks" title="7 лаба (календарь)">
        </a>

        <a class="task" href="">
            <img src="../picture/calendar.png" class="img_tasks" title="8 лаба (календарь)">
        </a>

        <div class="img_tasks_div">
            <img src="../picture/tasks.png" class="img_tasks" title="Лабы">
        </div>
    </div>

</body>

</html>