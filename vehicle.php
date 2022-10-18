<?php

class vehicule
{
    protected string $color;

    protected int $currentSpeed;

    protected int $nbSeats = 1;

    protected int $nbWheels = 2;

    public function __construct(string $color)
{
    $this->color = $color;
}

public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;

    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

public function getNbSeats(): int 
{
    return $this->nbSeats;
}
public function setNbSeats($nbSeats): self  
{
    $this->nbSeats = ($nbSeats<0) ? 0 : $nbSeats;
    return $this;
}
public function getNbWheels(): int 
{
     return $this->nbWheels;
}
public function setNbWheels($nbWheels) : self 
{
    $this->nbWheels = ($nbWheels<0) ? 0 : $nbWheels;
    return $this;
}
}

?>