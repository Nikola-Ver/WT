<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics</title>
    <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/main.css" />
    <script src="../js/hat.js"></script>
    <script src="../js/registration.js"></script>
</head>

<body>
    <?php
    include 'main_elements.php';
    echo $main_elements;
    ?>

    <?php
    include 'values_sql.php';
    $link = mysqli_connect($host, $name, $password, $base);
    $query = "SELECT * FROM " . $table;
    if (!mysqli_connect_errno()) {
        print_r(mysqli_fetch_all(mysqli_query($link, $query)));
    }
    ?>
</body>

</html>