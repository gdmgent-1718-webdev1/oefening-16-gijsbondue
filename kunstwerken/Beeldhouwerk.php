<?php

namespace Kunstwerken;

class Beeldhouwerk extends KunstwerkAbstract implements AfbeeldingInterface{
    public $afbeelding;
    public function getAfbeelding(): ?string
    {
        return $this -> afbeelding;
    }   
    public function setAfbeelding(string $afbeelding)
    {
        $this-> afbeelding = $afbeelding;
    } 

    public $gewicht;
    public function getGewicht(): ?string
    {
        return $this -> gewicht;
    }   
    public function setgewicht(string $gewicht)
    {
        $this-> gewicht = $gewicht;
    } 
}
