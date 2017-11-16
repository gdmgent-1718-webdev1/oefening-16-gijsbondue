<?php

namespace Kunstwerken;

abstract class KunstwerkAbstract{
        public $titel;
        public $jaar;
        public $kunstenaar;

    function __construct(){
        $this->jaar = rand(1500,2018);
        $this->titel = "Deze titel is verloren";
        $this->kunstenaar = "net als de titel... verloren...";
          
    }

   
    
}