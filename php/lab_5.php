<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL & PHP</title>
    <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/lab_5.css" />
    <script src="../js/hat.js"></script>
    <script src="../js/registration.js"></script>
    <?php include 'lab_5_logic.php'; ?>
</head>

<body>
    <?php
    include 'main_elements.php';
    echo $main_elements;
    ?>

    <?php if ($flag_input_base) : ?>
        <form action="lab_5.php" method="GET" class="form">
            <p class="main_text">Введите данные</p>
            <input type="text" name="sql_base" class="input" value="" placeholder="База данных">
            <input type="text" name="sql_table" class="input" value="" placeholder="Таблица">
            <input type="submit" name="in" value="Перейти" class="input_submit">
            <?php if ($error) : ?>
                <p class="error">Произошла ошибка</p>
            <?php endif ?>
        </form>

    <?php else : ?>
        <div class="main_div">
            <div class="input_sql">
                <form action="lab_5.php" method="GET" class="form_add">
                    <p class="input"><?= 'В таблице записей: ' . count($keys); ?></p>
                    <input type="text" name="sql_base" class="input" value="<?= $base; ?>" readonly>
                    <input type="text" name="sql_table" class="input" value="<?= $table; ?>" readonly>
                    <?php for ($i = 0; $i < count($keys); $i++) : ?>
                        <input type="text" name="<?= $keys[$i] ?>" class="input" value="" placeholder="<?= $keys[$i] ?>">
                    <?php endfor ?>
                    <input type="submit" name="add" value="Добавить" class="input_submit">
                </form>
            </div>

            <div class="output_sql">
                <?php for ($i = 0; $i < count($result); $i++) : ?>
                    <div class="sql_response_div">
                        <?php for ($d = 0; $d < count($result[$i]); $d++) : ?>
                            <p><?= $keys[$d] . ": " . $result[$i][$d] ?></p>
                        <?php endfor ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    <?php endif ?>
    <div class="space_after"></div>
</body>

</html>