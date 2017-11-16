<?php
 
namespace Kunstwerken;

interface AfbeeldingInterface{
    public function getAfbeelding(): ?string;
    public function setAfbeelding(string $afbeelding);
 }