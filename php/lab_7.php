<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/lab_7.css" />
    <script src="../js/hat.js"></script>
    <script src="../js/registration.js"></script>
</head>

<body>
    <?php
    include 'main_elements.php';
    echo $main_elements;
    ?>

    <form action="lab_7_logic.php" class="input_div" method="post">
        <input name="email" type="email" class="input_text" placeholder="Email получателя">
        <input name="subject" type="text" class="input_text" placeholder="Тема письма">
        <textarea name="text" class="input_text" placeholder="Введите письмо..."></textarea>
        <input type="submit" class="heading" id="send" value="Отправить">
    </form>
</body>

</html>