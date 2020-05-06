<?php
include 'logic.php';
$main_elements = '
    <div class="main_hat" style="background:' . $background  . '">
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
    <div class="lab_tasks">
    <a class="task" href="calendar.php">
      <img src="../picture/calendar.png" class="img_tasks" title="3 лаба (календарь)">
    </a>

    <a class="task" href="regex.php">
      <img src="../picture/regex.png" class="img_tasks" title="4 лаба (регулярные выражения)">
    </a>

    <a class="task" href="lab_5.php">
      <img src="../picture/sql.png" class="img_tasks" title="5 лаба (MySQL & PHP)">
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
  </div>';
