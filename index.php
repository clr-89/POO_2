<?php

    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';


    $truck = new Truck(250,90);
    var_dump($truck);

    $bicycle = new Bicycle('blue', 1);
    echo $bicycle->forward();


    $car = new Car('green', 4, 'electric');
    echo $car->forward();



    $bike = new Bicycle('green');

    $claireBike = new Bicycle('red');




    echo $bike->forward();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();

    $car = new Car('red',5,'diesel');
    var_dump($car);
    $claireCar = new Car('yellow',4,'diesel');
    var_dump($claireCar);


    echo $car->start();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->forward();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();

