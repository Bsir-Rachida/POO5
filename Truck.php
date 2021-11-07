<?php
require_once 'Vehicle.php';


class Truck extends Vehicle

{
    private int $capacity;
    private int $loading= 50;

    public function __construct(string $color, int $nbSeats, string $energy)   
    {    
        parent::__construct($color, $nbSeats) ;    
        $this->setEnergy($energy);    
         
    }
    public function getEnergy()   
        {    
            return $this->energy;    
        }

    public function setEnergy(string $energy): void
    {
        $this->energy= $energy; 
    }
    
    public function setCapacity(int $capacity): void

    {
        $this->capacity= $capacity;
    }
    public function loading()

    {

        if ($this->loading > 0 && $this->loading < $this->capacity) {

           echo "in filling";

        }elseif($this->loading >= $this->capacity){

          echo "full";
        }
    }
}