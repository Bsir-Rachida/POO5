<?php 
require_once 'HighWay.php';
final class PedestrianWay extends HighWay

{   
    public function addVehicle(vehicle $vehicle){
        
        if ($vehicle instanceof vehicle){
            $this->currentVehicles[]= $vehicle;
        }
        
   }
   
}