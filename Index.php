<?php

spl_autoload_register(function ($name){  
    $path = "${name}.php";
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $path);
});

$boek = new kunstwerken\Boek(); 
$boek->setBladzijden(rand(20,500));
$boek->setWoorden(20);
echo var_dump($boek);

$beeld = new kunstwerken\BeeldHouwerk(); 
$beeld->setAfbeelding("afbeelding locatie is verloren");
$beeld->setGewicht(200);
echo var_dump($beeld);

$dans = new kunstwerken\Dans();
$dans->setAfbeelding("Dansende mensen");
echo var_dump($dans);

$film = new kunstwerken\Film();
$film->setAfbeelding("filmende mensen");
$film->setDuur(124);
echo var_dump($film);

$foto = new kunstwerken\Foto();
$foto->setAfbeelding("kliekjes");
echo var_dump($foto);

$gedicht = new kunstwerken\Gedicht();
$gedicht->setWoorden(22);
echo var_dump($gedicht);

$lied = new kunstwerken\Lied();
$lied->setDuur(134);
echo var_dump($lied);

$schilderij = new kunstwerken\Schilderij();
$schilderij->setAfbeelding("schilderende mensen");
echo var_dump($schilderij);

$vaas = new kunstwerken\Vaas();
$vaas->setAfbeelding("");
echo var_dump($vaas); 
