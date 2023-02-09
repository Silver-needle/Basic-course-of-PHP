<?php
$allTasks = null;
$name = readline('Введите ваше имя, пожалуйта  ');
$count = (int)readline('Сколько задач стоит перед вами сегодня? ');
if ($count > 0) {
  for ($i = 1; $i <= $count; ++$i) {
    $task = readline("Опишите задачу № $i   ") &&
    $time = (int)readline("Сколько примерно часов займет задача № $i ?   ");
    $allTasks .= "-" . $task . " (" . $time . "ч)".PHP_EOL;
    $allTime += $time;
  }
  echo "$name, сегодня у вас запланировано $count задач на день: \n"
    . $allTasks .
    "\nПримерное время выполнения плана = " . $allTime  . " ч ";
} else {
  echo 'Число задач введено неверно.';
}
