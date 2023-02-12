<?php
$students = [
   'ИТ20' => [
      'Иванов Иван' => 5,
      'Кириллов Кирилл' => 3,
      'Орлов Николай' => 4,
      'Сазонова Ольга' => 4,
      'Скринник Влад' => 2,
      'Трезубцев Илья' => 3,
      'Кастомирова Наталья' => 2,
      'Лагутина Светлана' => 5
   ],
   'БАП20' => [
      'Антонов Антон' => 4,
      'Державин Сергей' => 5,
      'Лебедева Елена' => 3,
      'Спиридонов Александр' => 5,
      'Ульянова Яна' => 3,
      'Кузьмин Алексей' => 2,
      'Попов Дмитрий' => 4
   ]
];
$losers = [];
$sumGrades = 0;
$maxGrade = 0;

foreach ($students as $group => $list) {
   foreach ($list as $name => $grade) {
      $sumGrades += $grade;
      if ($grade < 3) {
         $losers[$group][] = $name;
      }
   }
   $allSumGrade = $sumGrades / count($list);
   echo $group . ': ' . round($allSumGrade, 1) . PHP_EOL;
   if ($allSumGrade > $maxGrade) {
      $maxGrade = round($allSumGrade, 1);
      $liders = $group;
   }
}
echo 'Лидеры: ' . $liders . ' - ' . $maxGrade . PHP_EOL;
echo 'Список на отчисление: ';
print_r($losers) . PHP_EOL;
