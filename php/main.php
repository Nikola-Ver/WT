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

  <form action="lab_2.php" method="GET" class="lab_2_form">
    <input type="text" name="userInput" class="" />
    <input type="submit" />
  </form>

  <div class="cards_flex">
    <a href="html.php">
      <div class="language_cards" id="htmlCard">
        <p class="headingText">html</p>
        <img src="../picture/html.png" alt="Картинка не найдена или еще не загрузилась!" class="languageIcons" />
        <p class="textAboutLanguage">
          HTML (от англ. hyper_text Markup Language — «язык гипертекстовой
          разметки») — стандартизированный язык разметки документов во
          Всемирной паутине. Большинство веб-страниц содержат описание
          разметки на языке HTML (или XHTML). Язык HTML интерпретируется
          браузерами; полученный в результате интерпретации форматированный
          текст отображается на экране монитора компьютера или мобильного
          устройства. Язык HTML до 5-й версии определялся как приложение SGML
          (стандартного обобщённого языка разметки по стандарту ISO 8879),
          спецификации DOM.
        </p>
      </div>
    </a>

    <a href="css.php" class="cat_hover">
      <div class="language_cards" id="cssCard">
        <p class="headingText">css</p>
        <img src="../picture/css.png" alt="Картинка не найдена или еще не загрузилась!" class="languageIcons" />
        <p class="textAboutLanguage">
          CSS (/siːɛsɛs/ англ. Cascading Style Sheets — каскадные таблицы
          стилей) — формальный язык описания внешнего вида документа,
          написанного с использованием языка разметки. Преимущественно
          используется как средство описания, оформления внешнего вида
          веб-страниц, написанных с помощью языков разметки HTML и XHTML, но
          может также применяться к любым XML-документам, например, к SVG или
          XUL.CSS используется создателями веб-страниц для задания цветов,
          шрифтов, стилей, расположения отдельных блоков и других аспектов
          представления внешнего вида этих веб-страниц.
        </p>
      </div>
    </a>

    <img src="../picture/css.gif" alt="Картинка не найдена или еще не загрузилась!" class="cssGif" />

    <a href="js.php">
      <div class="language_cards" id="jsCard">
        <p class="headingText">js</p>
        <img src="../picture/js.png" alt="Картинка не найдена или еще не загрузилась!" class="languageIcons" />
        <p class="textAboutLanguage">
          JavaScript — мультипарадигменный язык программирования. Поддерживает
          объектно-ориентированный, императивный и функциональный стили.
          Является реализацией языка ECMAScript. JavaScript обычно
          используется как встраиваемый язык для программного доступа к
          объектам приложений. Наиболее широкое применение находит в браузерах
          как язык сценариев для придания интерактивности веб-страницам.
          Основные архитектурные черты: динамическая типизация, автоматическое
          управление памятью, прототипное программирование, функции как
          объекты первого класса.
        </p>
      </div>
    </a>

    <a href="php.php">
      <div class="language_cards" id="phpCard">
        <p class="headingText">php</p>
        <img src="../picture/php.png" alt="Картинка не найдена или еще не загрузилась!" class="languageIcons" />
        <p class="textAboutLanguage">
          PHP (/pi:.eɪtʃ.pi:/ англ. PHP: hyper_text Preprocessor — «PHP:
          препроцессор гипертекста») — скриптовый язык общего назначения,
          интенсивно применяемый для разработки веб-приложений. В настоящее
          время поддерживается подавляющим большинством хостинг-провайдеров и
          является одним из лидеров среди языков, применяющихся для создания
          динамических веб-сайтов Язык и его интерпретатор разрабатываются
          группой энтузиастов в рамках проекта с открытым кодом. Проект
          распространяется под собственной лицензией, несовместимой с GNU GPL.
        </p>
      </div>
    </a>
    <p class="about_website">© 2020 Vereshchagin, Inc.</p>
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