<?php

namespace Kunstwerken;

class Dans extends KunstwerkAbstract implements AfbeeldingInterface{
   
    public $afbeelding;
    public function getAfbeelding(): ?string
    {
        return $this -> afbeelding;
    }   
    public function setAfbeelding(string $afbeelding)
    {
        $this-> afbeelding = $afbeelding;
    } 
}
