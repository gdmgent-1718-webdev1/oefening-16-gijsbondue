<?php

namespace Kunstwerken;

class Gedicht extends KunstwerkAbstract implements WoordenInterface{
    
    public $aantalWoorden;
    public function getWoorden(): ?int{
        return $this -> aantalWoorden;
    }
    public function setWoorden(int $aantalWoorden){
        $this -> aantalWoorden = $aantalWoorden;
    }
}