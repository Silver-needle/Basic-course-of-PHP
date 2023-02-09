<?php
function countBasket($basket)
{
	$sum = 0;
	
	foreach ($basket as $count) {
	$sum += $count['quantity'];
	}
	echo $sum;
	return $sum;
}

/*! Передайте массив, пожалуйста*/
$basket = [
   [
      'position' => 'book',
      'quantity' => 10,
   ],
   [
      'position' => 'net-book',
      'quantity' => 1,
   ]
];

countBasket($basket);
