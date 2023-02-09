<?php
$items = ['where', 'is', 'my', 'money'];
$sum = 0;

$n = 0;
for ($n; $n < 100; $n++) {
   if ($n % 3 == 0 && $n % 5 == 0) { 
      shuffle($items);
      continue;
   } else if ($n % 3 == 0) {  
      echo 'string'.PHP_EOL;
      continue;
   } else if ($n % 5 == 0) { 
      $sum += $n;
   }
}
print_r($items);


$n = rand(50,100);
for ($i = 0; $i <= $n; $i++) {

}