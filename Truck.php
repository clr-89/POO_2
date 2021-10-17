<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const INITIAL_CARGO = 0;
    private int $capacityStorage;
    private int $cargo = self:: INITIAL_CARGO;

    public function __construct(int $capacityStorage, int $cargo)
    {
        $this->color = $capacityStorage;
        $this->nbSeats = $cargo;
    }

    public function getCapacityStorage(): int
    {
        return $this->capacityStorage;
    }

    public function setCapacityStorage(int $capacityStorage): void
    {
        $this->capacityStorage = $capacityStorage;
    }

    public function getCargo(): int
    {
        return $this->cargo;
    }

    public function setCargo(int $cargo): void
    {
        $this->cargo = $cargo;
    }

}