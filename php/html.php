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
    <h1 class="heading" id="bookHeading">Современный HTML учебник</h1>
    <ul class="hyper_text_block">
      <a href="" class="hyper_text">
        <li><span>Введение в HTML</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Инструментарий</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Теги</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Структура HTML-кода</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Типы тегов</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Значения атрибутов тегов</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Текст</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Ссылки</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Якоря</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Изображения</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Списки</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Таблицы</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Фреймы</span></li>
      </a>
      <a href="" class="hyper_text">
        <li><span>Валидация документов</li>
      </a>
    </ul>
  </div>

  <script>
    document.getElementsByClassName("load")[0].className = "";
  </script>
</body>

</html>