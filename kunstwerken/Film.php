<?php

namespace Kunstwerken;

class Film extends KunstwerkAbstract implements AfbeeldingInterface{
   
    public $afbeelding;
    public function getAfbeelding(): ?string
    {
        return $this -> afbeelding;
    }   
    public function setAfbeelding(string $afbeelding)
    {
        $this-> afbeelding = $afbeelding;
    } 
    public $duur;
    public function getDuur(): ?int{
        return $this -> duur;
    }
    public function setDuur(int $duur){
        $this -> duur = $duur;
    }
}