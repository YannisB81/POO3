<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }
    
    public function addVehicle (Vehicle $vehicle)
    {
        
        $new = $this->getCurrentVehicles();
        array_push($new, $vehicle);
        $this->setCurrentVehicles($new);
        $this->getCurrentVehicles();
    }

}