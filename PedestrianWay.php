<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    
    public function __construct()
    {
        parent::__construct();
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }
    
    public function addVehicle (Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $new = $this->getCurrentVehicles();
            array_push($new, $vehicle);
            $this->setCurrentVehicles($new);
            $this->getCurrentVehicles();
        } else {
            echo 'Non-autorisé sur voie piétonne';
        }
        
    }

}