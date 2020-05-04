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
</head>

<body class="load">
  <?php
  include 'main_elements.php';
  echo $main_elements;
  ?>

  <div class="content_box">
    <h1 class="heading" id="bookHeading">Современный PHP учебник</h1>
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
</body>

</html>