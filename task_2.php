<?php
$arrWishes = ['счастья', 'сна', 'достатка', 'отпуска', 'вдохновения', 'веселья'];
$arrEpithets = ['бесстыдного', 'злостного', 'фееричного', 'всепоглощающего', 'безудержного'];
$name = readline('Введите, пожалуйста, имя именинника   ');

for ($i = 0; $i <= 2; $i++) {
    $indexRanE = array_rand($arrEpithets);
    $indexRanW = array_rand($arrWishes);
    $phrases[] =  $arrEpithets[$indexRanE] . ' ' . $arrWishes[$indexRanW];;
    unset($arrEpithets[$indexRanE]);
    unset($arrWishes[$indexranW]);
}

print_r($phrases);
echo 'Дорогой(-ая), ' . $name . ', поздравляю тебя с днем рождения! Желаю ' . implode(', ', $phrases) . '!';
