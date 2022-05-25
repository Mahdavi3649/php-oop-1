<?php 


class Movie {

    public $name;
    public $genre;
    public $directer;

}

$Oldboy = new Movie(); 
$Irreversible = new Movie(); 
var_dump($Oldboy, $Irreversible);


$Oldboy ->name = 'Oldboy';
$Oldboy ->genre = 'neo-noir action';
$Oldboy ->directer = 'Chan Wook Park';

$Irreversible ->name = 'Irreversible';
$Irreversible ->genre = 'drama';
$Irreversible ->directer = 'Gaspar Noe';

var_dump($Oldboy, $Irreversible);

?>