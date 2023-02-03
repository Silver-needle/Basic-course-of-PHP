<?php
$allTasks = null;
//$name = readline('Введите ваше имя, пожалуйта  ');
$count = (int)readline('Сколько задач стоит перед вами сегодня? ');

for ($i = 1; $i <= $count; ++$i) {
  echo $task = readline("Опишите задачу № $i   ") &&
    $time = (int)readline("Сколько примерно часов займет задача № $i ?   ");
    $allTasks .= "-" . $task . " (" . $time . "ч)\n"; 
}
echo "$name, сегодня у вас запланировано $count задач на день: \n"
  . $allTasks .
  "\nПримерное время выполнения плана = " . $time = $time + $time . " ч ";
