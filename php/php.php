<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Comet</title>
  <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/main.css" />
  <script src="../js/hat.js"></script>
  <script src="../js/registration.js"></script>
  <?php include 'logic.php'; ?>
</head>

<body class="load">
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

  <div class="content_box">
    <p class="heading" id="bookHeading">Современный PHP учебник</p>
    <ul class="hyper_text_block">
      <a href="" class="hyper_text">
        <li><span>Знакомство с языком</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Что такое PHP</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Синтаксис PHP</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Массивы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Циклы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Функции</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Шаблонизация и подключение файлов</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Подключение файлов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Шаблонизация</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Протокол HTTP и формы</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Протокол HTTP</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Формы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Уязвимости</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Идентификация пользователя на сайте</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Аутентификация пользователя</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Базы данных</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>База данных</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>SQL</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>MySQL в PHP</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Безопасность в MySQL</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Объекты и использование библиотек</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Объекты</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Библиотеки</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Composer</span></li>
        </a>
      </ul>
    </ul>
  </div>

  <script>
    document.getElementsByClassName("load")[0].className = "";
  </script>
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