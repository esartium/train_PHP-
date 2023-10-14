<?php

echo "<br>bebebe";
echo '<br>bababa';
echo "<br><i>вывод html-штук</i>";

echo '"';

// коммент
# коммент
/* 
коммент
коммент
коммент
многострочный типа 
*/

$per = 55; // создали и установили какое-то значение
$per = 45; // передумали

echo "$per / ";
echo $per . " / "; // палки не нужны, это просто разделение

$per2 = 28;

// Через два оператора echo:
echo $per . " / ";
echo $per2 . " / ";
// или через один общий:
echo $per . $per2;
// С помощью точки мы объединяем несколько различных значений.

$f = "stroka";
$g = -0.5;

echo "<br>Штука:" . $f . '-' . $g;

define("NAZV",35);
echo NAZV . '<br>';

$x = 10;
$y = 20;

echo $x + $y . '<br>';

echo M_E . '<br>';
echo M_PI . '<br>';

$polozh = 45;
$otric = -77;

echo abs($polozh) . '<br>';
echo abs($otric) . '<br>';

echo ceil(3.4) . ' ' . floor(3.4) . '<br>';

echo sin(M_PI) + cos(M_PI) . '<br>';

echo mt_rand(1, 20) . '<br>';

echo min(3, 6, 8, 10) . '<br>';

echo "в двойных кавычках: $per" . '<br>';

echo 'в одинарных кавычках: $per' . '<br>';

echo "<input type='text'>" . '<br>';
echo "<input type=\"text\">" . '<br>';

$stroka = ' bebebe ';
$length = strlen($stroka);
echo "Длина строки $stroka:" . strlen($stroka) . '<br>';

echo "Суперпозиция: " . strtoupper(trim($stroka)) . '<br>';

echo "Хеширование строки: " . md5($stroka) . '<br>';

$per45 = 5;
$per_rand = mt_rand(1, 100);

if ($per45 + $per_rand >= 90) {
    echo "Условный оператор $per_rand" . '<br>';
} else if ($per45 + $per_rand >= 60) {
    echo "Условный оператор!!! $per_rand" . '<br>';
}
else {
    echo "условный оператор!! $per_rand" . '<br>';
}

$perm = 4;
switch($perm) {
    case 4: 
        echo "switch-case ура ура" . '<br>';
        break;
    case 6:
        echo "switch-case не ура" . '<br>';
        break;
}

$massiv = array(2, 77, 142, -8, 6, 7, 8);
echo $massiv[3] . '<br>';

$arr = [12, 48, 1.2, 4.8, 'dfdgfd', false];
echo $arr[0] . $arr[2] . $arr[4] . '<br>';

$array = [
    "first_key" => "first_znachenie",
    "sec_key" => "sec_znachenie",
    "third_key" => "third_znachenie",
];
echo $array["first_key"] . '<br>';

$mass = [
    [1, 2, 3], [4, 5, 6], [765, 432, 219]
];

echo $mass[0][2] . '<br>';

for ($i = 0; $i < 5; $i++) {
    echo $massiv[$i] . '_';
}

echo '<br>';

for ($i = 5; $i > 0; $i -= 2) {
    echo $massiv[$i] . '_';
}

echo '<br>';

while ($i != 6) {
    echo $massiv[$i] . ' ыыы ';
    $i++;
}

echo '<br>';

$peremen = 1000;
do {
    echo $peremen . '<br>';
} while ($peremen < 10);

echo '<br>';

for ($p = 100; $p > 10; $p /= 2) {
    if ($p < 50) 
        break;
    
    if ($p % 2 == 0) 
        continue;

    echo $p . '<br>';
}

echo '<br>';

for ($i = 0; $i < count($massiv); $i++) {
    echo "  элемент $i - " . $massiv[$i];
}

$ar = [
    1 => "мяу",
    2 => "ыыы",
    3 => "бабаба",
    4 => "бебебе"
];

foreach ($ar as $item => $value) {
    echo "Key: " . $item . ", value: " . $value . '<br>';
}

foreach ($massiv as $value) {
    echo $value . '<br>';
}

//функция без параметров:
function fun () {
    echo "функция без параметров" . '<br>';
}
fun();

//функция с параметром:

$par = mt_rand(1, 20000);

function wpar ($par) {
    echo "функция с параметром " . $par . '<br>';
}
wpar($par);

//несколько парамтеров, передача при вызове:

function twopar ($x, $y) {
    $res = $x / $y;
    echo $res . '<br>';
}

twopar(10, 5);

//возвращение значений

function twopar2 ($x, $y) {
    $res = $x + $y;
    return $res;
}

$res2 = twopar2(3, 1);

function twopar3 ($x, $y) {
    $res = $x / $y;
    return $res;
}

$res3 = twopar3(12, 6);

function vivod ($par) {
    echo $par . '<br>';
}

vivod($res2);
vivod($res3);








?>