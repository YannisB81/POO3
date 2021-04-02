<?php
require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'MotorWay.php';
require_once 'HighWay.php';
require_once 'PedestrianWay.php';
require_once 'Truck.php';
require_once 'ResidentialWay.php';
require_once 'Car.php';

$auto = new MotorWay();
$auto->addVehicle(new Car('green', 8, 'electric'));
var_dump($auto);

$truck = new ResidentialWay();
$truck -> addVehicle(new Truck(50, 'black', 3, 'diesel'));
var_dump($truck);

$bike = new PedestrianWay();
$bike -> addVehicle(new Bicycle('black', 1));
var_dump($bike);

$auto2 = new PedestrianWay();
$auto2->addVehicle(new Car('blue', 5, 'solar'));
var_dump($auto2);

$auto3 = new ResidentialWay();
$auto3 -> addVehicle(new Car('yellow', 4, 'eolienne'));
var_dump($auto3);

$bike2 = new MotorWay();
$bike2 -> addVehicle(new Bicycle('black', 2));
var_dump($bike2);
