<?php 
require_once 'HighWay.php';
final class MotorWay extends HighWay

{
    
    public function addVehicle(vehicle $vehicle){
        
         if ($vehicle instanceof Car){
             $this->currentVehicles[]= $vehicle;
         }
         
    }
    
}