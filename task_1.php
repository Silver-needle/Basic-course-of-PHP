<?php
$arr1 = [];
$arr2 = [];
$arrMult = [];
$arrLength = 20;

for ($i = 0; $i <= $arrLength; $i++) {
   $arr1[$i] = rand(0,20);
   $arr2[$i] = rand(0,20);
   $arrMult[$i] = $arr1[$i] * $arr2[$i];
   echo $arr1[$i] .' * '. $arr2[$i] .' = '. $arrMult[$i] .PHP_EOL;
   
}
print_r($arrMult);

?>