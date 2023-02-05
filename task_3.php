<?php
$number = (int)readline('Введите число');

if ($number > 5) {
  $finger = 4;
  $inc = -1;
  for ($i = 6; $i < $number; $i++) {
    $finger += $inc;
    if ($finger == 5) {
      $inc = -1;
    } elseif ($finger == 1) {
      $inc = 1;
    }
  }
} else {
  $finger = $number;
}
switch ($finger) {
  case '1':
    echo $number . ' - Это большой палец';
    break;
  case '2':
    echo $number . ' - Это указательный палец';
    break;
  case '3':
    echo $number . ' - Это средний палец';
    break;
  case '4':
    echo $number . ' - Это безымянный палец';
    break;
  case '5':
    echo $number . ' - Это мизинец';
    break;
}
