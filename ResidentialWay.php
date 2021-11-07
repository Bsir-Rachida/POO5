<?php 
require_once 'HighWay.php';
final class ResidentialWay extends HighWay

{   
  
    public function addVehicle(vehicle $vehicle){
        
        if ($vehicle instanceof bicycle || $vehicle instanceof Skateboard){
            $this->currentVehicles[]= $vehicle;
        }
        
   }
}