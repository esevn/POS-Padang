<?php

require_once __DIR__ . '/Model/Model.php';
require_once __DIR__ . '/Model/Car.php';
require_once __DIR__ . '/Model/Owner.php';


// $connection = new Connection();
// echo $connection;
// $car = new Car();
// $data_mobil = ['name' => 'Xenia', 'brand' => 'Daihatsu', 'color' => 'silver'];
$owner = new Owner();
$data_owner = ['name' => 'Xenia', 'country' => 'Jepang', 'since' => '2003'];
// var_dump($data_mobil = ['name' => 'Avanza', 'brand' => 'Toyota', 'color' => 'silver']);
// $model->create($data_mobil, "cars");

// $dataMobil = $model->update(2, $data_mobil, 'cars');
// var_dump( $dataMobil = $model->index('cars'));
// var_dump($car->all());
// echo "<br>";
// var_dump($car->create($data_mobil));
// echo "<br>";
// var_dump($car->find(1));
// echo "<br>";
// var_dump($car->update(2, $data_mobil));
// echo "<br>";
// var_dump($car->delete(2));

var_dump($owner->all());
echo "<br>";
var_dump($owner->create($data_owner));
echo "<br>";
// var_dump($owner->find(1));
echo "<br>";
// var_dump($owner->update(2, $data_owner));
// echo "<br>";
// var_dump($owner->delete(2));


header("Location: /project/views/index.php");