<?php
 
namespace Kunstwerken;

interface GewichtInterface{
    public function getGewicht(): ?string;
    public function setGewicht(string $afbeelding);
 }