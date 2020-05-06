function startASurvey() {
  //HTML
  let answer = prompt(
    "С помощью какого тега в HTML создаются ссылки?\n1. <a>\n2. <p>\n3. <div>\n4. <head>\n5. <h1>",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 1 || answer.toLowerCase() === "<a>") alert("Верно!");
  else alert("Правильный ответ: 1. <a>");

  answer = prompt(
    "Какую кодировку следует использовать на сайте?\n1. UTF16\n2. UTF8\n3. UTF32\n4. WINSOWS-1251",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 2 || answer.toLowerCase() === "utf8") alert("Верно!");
  else alert("Правильный ответ: 2. UTF8");

  answer = prompt(
    'Как сделать всплывающую подсказку при наведении на ссылку?\n1. <a alt="Подсказка" href="#">Ссылка</a>\n2. <a caption="Подсказка" href="#">Ссылка</a>\n3. <a title="Подсказка" href="#">Ссылка</a>',
    "Введите ваш ответ"
  ).trim();

  if (
    Number(answer) === 3 ||
    answer.toLowerCase() === '<a title="подсказка" href="#">ссылка</a>'
  )
    alert("Верно!");
  else alert('Правильный ответ: 3. <a title="Подсказка" href="#">Ссылка</a>');

  //CSS
  answer = prompt(
    "Какой из приведённых вариантов не является допустимым значением свойства border-style?\n1. dotted\n2. inset\n3. glazed\n4. groove\n5. solid",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 3 || answer.toLowerCase() === "glazed")
    alert("Верно!");
  else alert("Правильный ответ: 3. glazed");

  answer = prompt(
    "Что из перечисленного не является допустимым значением длины?\n1. cm\n2. dm\n3. em\n4. mm",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 2 || answer.toLowerCase() === "dm") alert("Верно!");
  else alert("Правильный ответ: 2. dm");

  answer = prompt(
    "В CSS есть 16 основных названий для цвета. Какое из перечисленных названий к ним не принадлежит?\n1. olive\n2. fuchsia\n3. cyan\n4. aqua\n5. maroon",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 3 || answer.toLowerCase() === "cyan") alert("Верно!");
  else alert("Правильный ответ: 3. cyan");

  //JS
  answer = prompt(
    "Метод в JS, который удаляет отступы с двух сторон в строке?\n1. trim\n2. cleanSpace\n3. clear\n4. sort",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 1 || answer.toLowerCase() === "trim") alert("Верно!");
  else alert("Правильный ответ: 1. trim");

  //PHP and JS
  answer = prompt(
    "Какое из сравнений в начале приводит к типу в JS и PHP?\n1. ==\n2. ===",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 1 || answer.toLowerCase() === "==") alert("Верно!");
  else alert("Правильный ответ: 1. ==");

  //PHP
  answer = prompt(
    "Что сделает данная конструкция в PHP: <?= answer ?>?\n1. Выведет переменную answer\n2. Удалит ютуб\n3. Оценит шутку\n4. Приготовит покушать",
    "Введите ваш ответ"
  ).trim();

  if (
    Number(answer) === 1 ||
    answer.toLowerCase() === "выведет переменную answer"
  )
    alert("Верно!");
  else alert("Правильный ответ: 1. Выведет переменную answer");

  answer = prompt(
    "Профессиональный вопрос: сколько букв в слове PHP?\n1. Я не знаю, мне страшно\n2. echo strlen('PHP')\n3. За PHP и двор бью в упор!\n4. Вопросы реально балдежные!\n5. 4!!",
    "Введите ваш ответ"
  ).trim();

  if (Number(answer) === 2 || answer.toLowerCase() === "echo strlen('php')")
    alert("Верно!");
  else if (
    Number(answer) === 3 ||
    answer.toLowerCase() === "за php и двор бью в упор!"
  )
    alert("Вы трушный PHP-программист!!! Либо его создатель!!!");
  else alert("Правильный ответ: 2. echo strlen('PHP')");
}
