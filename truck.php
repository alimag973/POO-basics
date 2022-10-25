<?php

require_once './Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading = 0;


public function __construct(string $color, int $nbSeats, string $energy, int $torageCapacity)
{
   parent ::__construct($color, $nbseats);
   $tihs->energy = $energy;
   $this->storageCapacity($torageCapacity);
}

public function getStorageCapacity(): int 
{
    return $this->storageCapacity;
}
public function setStorageCapacity(int $StorageCapacity): void 
{
    $this->storageCapacity = $storageCapacity;
}


public function getLoading(): string 
{
  return $this->loading;
}

public function setLoading($loading): void 
{
    $this->loading = $loading;
}
public function load(): string
        {
            if (($this->getStorageCapacity() > $this->getLoading())) {
                return "In filling";
            } else {
                return "full";
            }
        }
}