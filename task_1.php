<?php
$answer = (int)readline ("В каком году произошло крещение Руси? /n
- 810 /n
- 988 /n
- 740 /n")

switch ($answer)
{
case $answer == 810 || $answer == 740: 
echo 'Иди учись';
break;
case $answer == 988:
  echo 'Молодец-огурец!';
  break;
defoult: 
echo 'Кого ты хочешь обмануть?\)';
};
?>