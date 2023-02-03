<?php
do
  $answer = (int)readline("В каком году произошло крещение Руси?
  - 810  
  - 988  
  - 740 ");
while ($answer !== 810 && $answer !== 988 && $answer !== 740);
  switch (true) {
    case $answer == 810 || $answer == 740:
      echo 'Иди учись';
      break;
    case $answer == 988:
      echo 'Молодец-огурец!';
      break;
  };

