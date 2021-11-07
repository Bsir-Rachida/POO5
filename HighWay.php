
<?php 
abstract class HighWay

{

    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;


    public function __construct(int $NbLane, int $MaxSpeed)

    {
        
        $this->NbLane = $NbLane;
        $this->MaxSpeed = $MaxSpeed;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles= $currentVehicles; 
    }
    
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }



    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(string $nbLane): void
    {
        $this->nbLane = $nbLane;
    }


    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle (vehicle $vehicle);
    
    
}