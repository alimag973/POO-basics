<?php

require_once 'Vehicule.php';

class car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'diesel',
        'regular',
    ];

    protected string $energy;
    protected int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }

        }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}
