<?php
error_reporting(0);
session_start();
include 'logic.php';
$authorized = $_COOKIE['Authorized'];

$main_elements = '<style>';
$main_elements .= $_SESSION['style'];
$main_elements .= '</style>';

$main_elements .= '
    <div class="main_hat" style="background:' . $background  . '"
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
    </div>';

if ($authorized) {
  $main_elements .=
    '<div class="users_property" onmouseover="userPropertyOn_()" onmouseout="userPropertyOff()">
      <form action="lab_6_logic.php" class="div_reg_log" method="post">
        <p class="user_log" onclick="userEnteryOn(true)">
        Изменить
        </p>
        <input name="exit" type="submit" value="Выйти" class="user_reg">
      </form>
    </div>
    <div class="user_enter_block" style="visibility: hidden;" onclick="userEnteryOff()">
      <form action="lab_6_logic.php" class="div_reg_log" method="post">
        <h1 class="heading" id="change_page_head" onclick="flagEnteryOn()">
          Изменение параметров страницы
        </h1>
        <div onclick="flagEnteryOn()" class="change_page_div">
          <div>
            <p>Цвет фона страницы</p>
            <input type="color" name="background_color"> 
          </div>

          <div>
            <p>Цвет основного шифрта</p>
            <input type="color" name="main_font_color"> 
          </div>

          <div>
            <p>Цвет заголовков</p>
            <input type="color" name="head_font_color"> 
          </div>

          <div>
            <p>Цвет ссылок</p>
            <input type="color" name="link_font_color"> 
          </div>

          <div>
            <p>Шрифт основного шифрта</p>
            <input type="number" name="main_font_size"> 
          </div>

          <div>
            <p>Шрифт заголовков</p>
            <input type="number" name="head_font_size">
          </div>
         
          <div>
            <p>Шрифт ссылок</p>
            <input type="number" name="link_font_size">
          </div>

          <input name="change_page" type="submit" value="Изменить" class="heading" id="but_send" />
        </div>
      </form>
    </div>';
} else {
  $main_elements .=
    '<div class="users_property" onmouseover="userPropertyOn_()" onmouseout="userPropertyOff()">
      <p class="user_log" onclick="userEnteryOn(true)">
      Войти
      </p>
      <p class="user_reg" onclick="userEnteryOn(false)">
      Регистрация
      </p>
    </div>
    <div class="user_enter_block" style="visibility: hidden;" onclick="userEnteryOff()">
      <form action="lab_6_logic.php" class="div_reg_log" method="post">
        <div onclick="flagEnteryOn()" class="div_reg_log">
          <h1 class="heading" id="reg_head">
              Авторизация
          </h1>
          <input name="email" type="email" class="reg_log" placeholder="Почта" />
          <input name="password" type="password" class="reg_pas" placeholder="      Пароль" />
          <img src="../picture/no_eye.png" class="pas_eye" onclick="changeEye()" />
          <input name="" type="submit" value="Войти" class="heading" id="but_send" />
        </div>
      </form>
      </div>';
}

$main_elements .=
  '<div class="lab_tasks">
    <a class="task" href="calendar.php">
      <img src="../picture/calendar.png" class="img_tasks" title="3 лаба (календарь)">
    </a>

    <a class="task" href="regex.php">
      <img src="../picture/regex.png" class="img_tasks" title="4 лаба (регулярные выражения)">
    </a>

    <a class="task" href="lab_5.php">
      <img src="../picture/sql.png" class="img_tasks" title="5 лаба (MySQL & PHP)">
    </a>

    <a class="task" href="lab_6.php">
      <img src="../picture/calendar.png" class="img_tasks" title="6 лаба (календарь)">
    </a>

    <a class="task" href="lab_7.php">
      <img src="../picture/calendar.png" class="img_tasks" title="7 лаба (календарь)">
    </a>

    <a class="task" href="lab_8.php">
      <img src="../picture/calendar.png" class="img_tasks" title="8 лаба (календарь)">
    </a>

    <div class="img_tasks_div">
      <img src="../picture/tasks.png" class="img_tasks" title="Лабы">
    </div>
  </div>';
