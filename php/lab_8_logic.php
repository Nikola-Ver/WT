<?php
error_reporting(0);
$error = false;

include 'values_sql.php';
$link = mysqli_connect($host, $name, $password, $base);
$showTable = '';
$users = [];

if (!mysqli_connect_errno()) {
    $query = "SELECT * FROM " . $table;
    $result = mysqli_fetch_all(mysqli_query($link, $query));
    $arr = mysqli_fetch_assoc(mysqli_query($link, $query));

    if (mysqli_query($link, $query)) {
        $keys = [];
        foreach ($arr as $key => $value) {
            array_push($keys, $key);
        }

        $showTable .=
            '<table>
                <tbody>
                    <tr>
                        <th>IP</th>
                        <th>Last time</th>
                        <th>Count</th>
                    </tr>';



        for ($d = 0; $d < count($result); $d++) {
            $currIp = $result[$d][0];
            $flagInclude = false;

            for ($i = 0; $i < $d; $i++) {
                if ($currIp === $result[$i][0]) $flagInclude = true;
            }

            if (!$flagInclude) {
                $count = 0;

                foreach ($result as $user) {
                    if ($currIp === $user[0]) {
                        $time = $user[1];
                        $count++;
                    }
                }

                array_push($users, array($currIp, $time, $count));
            }
        }

        Shell($users);
        for ($d = 0; $d < count($users); $d++) {
            $showTable .= '<tr>';

            for ($i = 0; $i < count($users[$d]); $i++) {
                $showTable .= '<td>';
                $showTable .= $users[$d][$i] . '</td>';
            };

            $showTable .= '</tr>';
        };

        $showTable .=
            '   </tbody>
        </table>';
    } else {
        $error = true;
    };
} else {
    $error = true;
};

$name = "";
$password = "";
$host = "";
$base = "";
$table = "";

$statistics = [];
$maxCount = 0; // 100% высота

for ($d = 0; $d < count($users); $d++) {
    $maxCount = $maxCount < $users[$d][2] ? $users[$d][2] : $maxCount;
    array_push($statistics, array($users[$d][0], $users[$d][2]));
}

$showGraphic = '<h1 class="main_text_graphic">Attendance schedule</h1><div class="graphic_div"><div class="graphic">';
for ($i = 0; $i < count($statistics); $i++) {
    $showGraphic .= '<div class="graphic_column" style="height: ' .
        ((float) $statistics[$i][1]) / ((float) $maxCount) * 100
        . '%;"></div>';
}
$showGraphic .= '
        </div>
        <div class="user_ip">';

for ($i = 0; $i < count($statistics); $i++) {
    $showGraphic .= '<p>' . $statistics[$i][0] . '</p>';
}
$showGraphic .= '</div></div>';

function Shell(&$mas)
{
    $sort_length = count($mas) - 1;
    $step = ceil(($sort_length + 1) / 2);

    do {
        $i = ceil($step);
        do {
            $j = $i - $step;
            $c = 1;
            do {
                if ($mas[$j][2] >= $mas[$j + $step][2]) {
                    $c = 0;
                } else {
                    $tmp = $mas[$j];
                    $mas[$j] = $mas[$j + $step];
                    $mas[$j + $step] = $tmp;
                }
                $j = $j - 1;
            } while ($j >= 0 && ($c === 1));
            $i = $i + 1;
        } while ($i <= $sort_length);
        $step = $step / 2;
    } while ($step > 0);
}
