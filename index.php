

 <?php

require './vehicle.php';
require_once 'Bicycle.php';
require_once 'car.php';
require './truck.php';

$bike = new Bicycle('blue',1);
$car = new Car('green',5,'regular');
$truck = new Truck('black',2,'diesel');

echo $bike->forward();
echo $bike->brake();

echo $car->forward();
echo $car->brake();

echo $truck->forward();
echo $truck->brake();
echo $truck->load();

