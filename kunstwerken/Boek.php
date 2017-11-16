<?php

namespace Kunstwerken;


class Boek extends KunstwerkAbstract implements BladzijdenInterface,
                                                WoordenInterface
                                                {
 
    public $aantalBladzijden;
    public function getBladzijden(): ?int
    {
        return $this -> aantalBladzijden;
    }   
    public function setBladzijden(int $aantalBladzijden)
    {
        $this-> aantalBladzijden = $aantalBladzijden;
    } 

    public $aantalWoorden;
    public function getWoorden(): ?int{
        return $this -> aantalWoorden;
    }
    public function setWoorden(int $aantalWoorden){
        $this -> aantalWoorden = $aantalWoorden;
    }

}
