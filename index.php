<?php

    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';

  
    $truck = new Truck(250,0,'yellow',3);

    var_dump($truck);

    echo $truck->forward();
    echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truck->brake();
    echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
    echo $truck->fullOrInFilling();

    $bicycle = new Bicycle('blue', 1);



    $car = new Car('green', 4, 'electric');
