<?php

namespace Kunstwerken;


class Lied extends KunstwerkAbstract implements DuurInterface{
   
    public $duur;
    public function getDuur(): ?int{
        return $this -> duur;
    }
    public function setDuur(int $duur){
        $this -> duur = $duur;
    }
}