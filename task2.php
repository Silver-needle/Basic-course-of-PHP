<?php

(int)$arrNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function sortArray(array $arrNum): array
{
   $max = max($arrNum). PHP_EOL;
   $min = min($arrNum). PHP_EOL;
   $avg = round(array_sum($arrNum) / count($arrNum), 1);
   return [
      "Наибольшее число" => $max,
      "Наименьшее число" => $min,
      "Среднее арифметическое всех чисел массива" => $avg
   ];
}

print_r(sortArray($arrNum));

?>