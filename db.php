<?php 

/* create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

 */


require __DIR__ . '/Models/Movie.php';

$movies = [

    new Movie('Oldboy','drama','Chand Wook Park','2001','https://m.media-amazon.com/images/M/MV5BMTI3NTQyMzU5M15BMl5BanBnXkFtZTcwMTM2MjgyMQ@@._V1_FMjpg_UX1000_.jpg'),
    new Movie('Dogville','drama','Lars Van Trier','2010','https://m.media-amazon.com/images/M/MV5BMTkwNTg2MTI1NF5BMl5BanBnXkFtZTcwMDM1MzUyMQ@@._V1_.jpg'),
    new Movie('Happy End','drama','Michael Haneke','2018','https://m.media-amazon.com/images/I/8168hk7mkbL._SL1500_.jpg'),
    new Movie('Enter the Void','action','Gaspar Noe','2015','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdk8mKNFiQcmuZspSgMtywni5KTGgyfyhnSDkIMaEA0Kh9khCJcemBaKJlgm-KayPxuC4&usqp=CAU'),
    new Movie('White wibbon','drama','Michael haneke','2010','https://m.media-amazon.com/images/M/MV5BMTQ2OTYyNzUxOF5BMl5BanBnXkFtZTcwMzUwMDY4Mg@@._V1_.jpg'),
    new Movie('Papillon','action','Michael Noer','2011','https://m.media-amazon.com/images/M/MV5BNzNiYzJmOWQtOTg0Ny00ZWU3LWI0ZjktOTQxNTJhNGNhYzg1XkEyXkFqcGdeQXVyMTYzMDM0NTU@._V1_.jpg'),
    new Movie('3-Iron','action','Kim Ki duk','2008','https://upload.wikimedia.org/wikipedia/en/7/70/3-Iron_%282004%29_poster.jpg'),
    new Movie('I stand Alone','dram','Gaspar Noe','2013','https://m.media-amazon.com/images/M/MV5BMmMyYzRjYjMtYzFkNy00Njc3LWIzOTQtNzIzNzE4YzM4NDNiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg'),
   
   ]

?>