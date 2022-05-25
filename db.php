<?php 

/* create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

 */


class Movie {

    public $title;
    public $genre;
    public $directer;
    public $year;
    public $img;

    public function __construct(String $title, String $genre, String $directer, int $year, $img) {
        $this->title = $title;
        $this->genre = $genre;
        $this->directer = $directer;
        $this->year = $year;
        $this->img = $img;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getDirecter(){
        return $this->directer;
    }
    public function getYear(){
        return $this->year;
    }
    public function getImage(){
        return $this->img;
    }

}

$Oldboy = new Movie('Oldboy', 'neo-noir action', 'Chan Wook Park','2003','https://www.umanitaria.it/images/Alghero/AttivitaCulturali/CDTM/Oldboy._Locandina.jpg'); 

$Irreversible = new Movie('Irreversible', 'drama', 'Gaspar Noe','2002', 'https://www.ilcineocchio.it/cine/wp-content/uploads/2019/09/Irreversible-film-poster-2002.jpg'); 

$ThePianoTeacher = new Movie('The Piano Teacher', 'drama', 'Michael Haneke','2001', 'https://m.media-amazon.com/images/I/516NC1CW6BL._AC_SY445_.jpg'); 

$TheCelebration = new Movie('The Celebration', 'drama', 'Thomas Vinterberg','1998', 'https://m.media-amazon.com/images/I/513ZEP3CM6L.jpg'); 
//var_dump($Oldboy, $Irreversible, $ThePianoTeacher,$TheCelebration);


$movies = [];
array_push($movies, $Oldboy, $Irreversible, $ThePianoTeacher,$TheCelebration);

//var_dump($movies);

?>