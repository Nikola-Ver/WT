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
    <p class="heading" id="bookHeading">Современный JS учебник</p>
    <ul class="hyper_text_block">
      <a href="" class="hyper_text">
        <li><span>Введение</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Введение в JavaScript</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Справочники и спецификации</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Редакторы кода</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Консоль разработчика</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Основы JavaScript</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Привет, мир!</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Структура кода</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Строгий режим — "use strict"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Переменные</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Типы данных</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Преобразование типов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Операторы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Операторы сравнения</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Взаимодействие: alert, prompt, confirm</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Условные операторы: if, '?'</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Логические операторы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Циклы while и for</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Конструкция "switch"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Функции</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Function Expression</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Функции-стрелки, основы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Особенности JavaScript</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Качество кода</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Отладка в браузере Chrome</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Советы по стилю кода</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Комментарии</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Ниндзя-код</span></li>
        </a>
        <a href="" class="hyper_text">
          <li>
            <span>Автоматическое тестирование c использованием фреймворка
              Mocha</span>
          </li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Полифилы</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Объекты: основы</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Объекты</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Сборка мусора</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Тип данных Symbol</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Методы объекта, "this"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Преобразование объектов в примитивы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li>
            <span>Конструкторы, создание объектов через "new"</span>
          </li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Типы данных</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Методы у примитивов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Числа</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Строки</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Массивы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Методы массивов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Перебираемые объекты</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Map и Set</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>WeakMap и WeakSet</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Object.keys, values, entries</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Деструктурирующее присваивание</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Дата и время</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Формат JSON, метод toJSON</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Продвинутая работа с функциями</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Рекурсия и стек</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Остаточные параметры и оператор расширения</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Замыкание</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Устаревшее ключевое слово "var"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Глобальный объект</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Объект функции, NFE</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Синтаксис "new Function"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Планирование: setTimeout и setInterval</span></li>
        </a>
        <a href="" class="hyper_text">
          <li>
            <span>Декораторы и переадресация вызова, сall/apply</span>
          </li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Привязка контекста к функции</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Повторяем стрелочные функции</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Свойства объекта, их конфигурация</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Флаги и дескрипторы свойств</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Свойства - геттеры и сеттеры</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Прототипы, наследование</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Прототипное наследование</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>F.prototype</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Встроенные прототипы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li>
            <span>Методы прототипов, объекты без свойства __proto__</span>
          </li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Классы</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Класс: базовый синтаксис</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Наследование классов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Статические свойства и методы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Приватные и защищённые методы и свойства</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Расширение встроенных классов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Проверка класса: "instanceof"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Примеси</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Обработка ошибок</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Обработка ошибок, "try..catch"</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Пользовательские ошибки, расширение Error</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Промисы, async/await</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Введение: колбэки</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Промисы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Цепочка промисов</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Промисы: обработка ошибок</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Promise API</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Промисификация</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Микрозадачи</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Async/await</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Генераторы, продвинутая итерация</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Генераторы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Асинхронные итераторы и генераторы</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Модули</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Модули, введение</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Экспорт и импорт</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Динамические импорты</span></li>
        </a>
      </ul>
      <a href="" class="hyper_text">
        <li><span>Разное</span></li>
      </a>
      <ul>
        <a href="" class="hyper_text">
          <li><span>Proxy и Reflect</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Eval: выполнение строки кода</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Каррирование</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Побитовые операторы</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>BigInt</span></li>
        </a>
        <a href="" class="hyper_text">
          <li><span>Intl: интернационализация в JavaScript</span></li>
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