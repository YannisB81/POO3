<?php

require_once 'HighWay.php';


final class MotorWay extends HighWay
{
    
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }
    
    public function addVehicle (Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $new = $this->getCurrentVehicles();
            array_push($new, $vehicle);
            $this->setCurrentVehicles($new);
            $this->getCurrentVehicles();
        } else {
            echo 'Non-autorisé sur autoroute';
        }
        
    }
}