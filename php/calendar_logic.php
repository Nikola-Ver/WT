<?php
error_reporting(0);
$year = (int) trim($_GET['year']);
$save = $_GET['save'];

if ($year !== 0) {
    $calendar = '';
    $month = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    $monthsAYear = 12;
    $monthsDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    $leapYear = 0;
    $codeYear = (6 + ($year % 100) + (int) (($year % 100) / 4)) % 7;
    $centureShift = array(
        0 => 7,
        1 => 5,
        2 => 3,
        3 => 1,
        4 => 7,
        5 => 5,
        6 => 3,
        7 => 1,
        8 => 7,
        9 => 5,
        10 => 3,
        11 => 1,
        12 => 7,
        13 => 5,
        14 => 3,
        15 => 1,
        16 => 7,
        17 => 5,
        18 => 3,
        19 => 1
    );

    if (($year % 4 !== 0) || ($year % 100 === 0) && ($year % 400 !== 0)) {
        $monthsDays[1] = 28;
        $leapYear = 0;
    } else {
        $monthsDays[1] = 29;
        $leapYear = 1;
    }
    $dayOfTheWeek = ($codeYear - $leapYear + $centureShift[$year % 10000 / 100 % 20]) % 7;

    for ($currentMonth = 0; $currentMonth < $monthsAYear; $currentMonth++) {
        $calendar = $calendar . '
        <table class="table"> 
        <caption class="caption_table">
    ';
        $calendar = $calendar . $month[$currentMonth];
        $calendar = $calendar . '
        </caption> 
        <tbody>                
            <tr>
                <th>Пн</th>
                <th>Вт</th>
                <th>Ср</th>
                <th>Чт</th>
                <th>Пт</th>
                <th>Сб</th>
                <th>Вс</th>
            </tr>
            <tr>
    ';

        for ($currentDay = 0; $currentDay < $monthsDays[$currentMonth]; $currentDay++) {
            for ($d = 0; $currentDay === 0 && $d < $dayOfTheWeek; $d++) {
                $calendar = $calendar . '<th></th>';
            }

            if ($dayOfTheWeek === 0 && $currentDay !== 0) {
                $calendar = $calendar . '
                </tr>
                <tr>
            ';
            }

            switch ($currentMonth) {
                case 0:
                    switch ($currentDay) {
                        case 0:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="Новый год">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        case 6:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="Православное Рождество">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                case 1:
                    switch ($currentDay) {
                        case 22:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="День защитника отечества">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                case 2:
                    switch ($currentDay) {
                        case 7:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="Международный женский день">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                case 4:
                    switch ($currentDay) {
                        case 0:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="Праздник труда">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        case 8:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="День Победы">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                case 6:
                    switch ($currentDay) {
                        case 2:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="День Независимости Республики Беларусь">' . (string) ($currentDay + 1) . '</td>';
                            break;

                            break;
                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                    }
                    break;

                case 10:
                    switch ($currentDay) {
                        case 6:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="День Октябрьской революции">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                case 11:
                    switch ($currentDay) {
                        case 24:
                            $calendar = $calendar . '<td class="weekend_cell_table" title="Католическое Рождество">' . (string) ($currentDay + 1) . '</td>';
                            break;

                        default:
                            $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                            break;
                    }
                    break;

                default:
                    $calendar = $calendar . '<td>' . (string) ($currentDay + 1) . '</td>';
                    break;
            }

            $dayOfTheWeek++;
            $dayOfTheWeek = $dayOfTheWeek % 7;
        }
        $calendar = $calendar . '
                </tr>
            </tbody>
        </table>
    ';
    }

    if ($save === 'Сохранить') {
        $data = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" href="../picture/MainIcon.png" type="image/x-icon">
                <link rel="stylesheet" href="../css/lab3.css">
                <link rel="stylesheet" href="../css/main.css"> 
                <title>Calendar</title>
            </head>
            <body>       
        ' . '
                <form action="calendar.php" method="GET" class="lab_3_form">
                <p class="main_text">'
            . $year . ' год</p>' . '</form>' .
            '<div class="table_group">' . $calendar . '
                </div>
                <div class="space_after_calendar"></div>
            </body>
            </html>
            ';

        file_put_contents('../output/table.html', $data, LOCK_EX);
    }
} else {
    $year = '';
}
