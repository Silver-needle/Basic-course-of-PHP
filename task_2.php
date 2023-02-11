<?php
$arrWishes = ['счастья', 'сна', 'достатка', 'отпуска', 'вдохновения', 'веселья'];
$arrEpithets = ['бесстыдного', 'злостного', 'фееричного', 'всепоглощающего', 'безудержного'];
$name = readline('Введите, пожалуйста, имя именинника   ');

for ($i = 0; $i <= 2; $i++) {
    $ranE = $arrEpithets[array_rand($arrEpithets)];
    $ranW = $arrWishes[array_rand($arrWishes)];
    $phrases[] = $ranE . ' ' . $ranW;
    
}
//unset($ranE[$arrEpithets], $ranW[$arrWishes]);

print_r($phrases);
echo 'Дорогой(-ая), ' . $name . ', поздравляю тебя с днем рождения! Желаю ' . implode(', ', $phrases) . '!';
