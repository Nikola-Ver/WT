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

  <form action="lab_2.php" method="GET" class="lab_2_form">
    <input type="text" name="userInput" class="" />
    <input type="submit" />
  </form>

  <div class="cards_flex">
    <a href="html.php">
      <div class="language_cards" id="htmlCard">
        <h1 class="headingText">html</h1>
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
        <h1 class="headingText">css</h1>
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
        <h1 class="headingText">js</h1>
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
        <h1 class="headingText">php</h1>
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

</body>

</html>