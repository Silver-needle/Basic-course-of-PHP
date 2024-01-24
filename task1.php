<?php
$arrNum = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$check = array_map(function (int $num): string {
   if ($num % 2 == 0) {
      $print = "$num - четное";
   } else {
      $print = "$num - нечетное";
   }

   return $print;
}, $arrNum);

print_r($check);

?>