<?php
$cars = [
   ['name' => 'Такси 1', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
   ['name' => 'Такси 2', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
   ['name' => 'Такси 3', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
   ['name' => 'Такси 4', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
   ['name' => 'Такси 5', 'position' => rand(0, 1000), 'isFree' => (bool) rand(0, 1)],
];

$passenger = rand(0, 1000);

foreach ($cars as $car) {
   $position = abs($car['position'] - $passenger);
   if ($car['isFree'] && (!isset($minPosition) || $position < $minPosition)) {
      $minPosition = $position;
      $name = $car['name'];
   }
}

foreach ($cars as $car) {
   echo $car['name'] . ' стоит на ' . $car['position'] . ' км, до пассажира ' . abs($car['position'] - $passenger) . ' км (' . ($car['isFree'] ? 'свободен' : 'занят') . ')' . ($car['name'] == $name ? ' - едет это такси' : '') . PHP_EOL;
   }

