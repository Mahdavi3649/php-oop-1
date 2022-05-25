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

}

$Oldboy = new Movie('Oldboy', 'neo-noir action', 'Chan Wook Park','2003','https://www.umanitaria.it/images/Alghero/AttivitaCulturali/CDTM/Oldboy._Locandina.jpg'); 

$Irreversible = new Movie('Irreversible', 'drama', 'Gaspar Noe','2002', 'https://www.ilcineocchio.it/cine/wp-content/uploads/2019/09/Irreversible-film-poster-2002.jpg'); 
//var_dump($Oldboy, $Irreversible);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Array di oggetti</title>
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card" style="width: 16rem;">
                <img class="card-img-top" src="<?php echo $Oldboy->img; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Oldboy->title; ?></h5>
                        <h6 ><?php echo $Oldboy->genre; ?></h6>
                        <h5 ><?php echo $Oldboy->directer; ?></h5>
                        <p><?php echo $Oldboy->year; ?></p>
                    </div>
             </div>
        </div>

        <div class="col">
            <div class="card" style="width: 18rem;">
                 <img class="card-img-top" src="<?php echo $Irreversible->img; ?>" alt="Card image cap">
                    <div class="card-body">
                    <h3 class="card-title"><?=$Irreversible->title; ?></h3>
                        <h6 ><?php echo $Irreversible->genre; ?></h6>
                        <h5 ><?php echo $Irreversible->directer; ?></h5>
                        <p><?php echo $Irreversible->year; ?></p>
                    </div>
             </div>
        </div>

    </div>
</div>
    
</body>
</html>