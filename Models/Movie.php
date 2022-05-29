<?php 
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


?>