<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

$bike = new Bicycle('black',1);
$twingo = new Car ('red', 4,'fuel');
$truck = new Truck('bleu', 4, 'fuel',0,0,100);



// Moving bike
/* echo $bike->forward(). PHP_EOL;
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $bike->brake() . PHP_EOL;
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $bike->brake() . PHP_EOL;

echo $twingo->forward() . PHP_EOL;
echo '<br> Vitesse de la twingo : ' . $twingo->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $twingo->brake() . PHP_EOL;
echo '<br> Vitesse de la twingo : ' . $twingo->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $twingo->brake() . PHP_EOL; */

echo $truck->forward() . PHP_EOL;
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $truck->brake() . PHP_EOL;
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h'  . PHP_EOL;
echo $truck->brake() . PHP_EOL;

echo $truck->isFilled();