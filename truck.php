<?php

require_once './vehicle.php';

class truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading = 0;


public function __construct(int $torageCapacity, string $color, string $energy, int $nbSeat)
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


public function getloading(): string 
{
  return $this->loading;
}

public function setLoading($loading): void 
{
    $this->loading = $loading;
}
public function load(): string
        {
            if (($this->getStorageCapacity() - $this->getload()) <= 0) {
                return "full";
            } else {
                return "In filling";
            }
        }
}