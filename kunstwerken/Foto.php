<?php

namespace Kunstwerken;

class Foto extends KunstwerkAbstract implements AfbeeldingInterface{
   
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