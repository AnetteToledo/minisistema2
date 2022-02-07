<?php

require 'Pelicula.php';

class Serie extends Pelicula{

    public function __construct(
        $titulo,
        $genero,
        $director,
        $resumen,
        $idioma,
        $pais,
        $calificacion,
        $precio,
        $id,
        private int $temporadas,
        private int $episodios
    ){
        parent::__construct($titulo,$genero,$director,$resumen,$idioma,$pais,$calificacion,$precio,$id);

    }

    public function getInformacion(){

        $result = "<center>Temporadas: $this->temporadas <br> Episodios: $this->episodios <br></center>";

        echo parent::getInformacion();

        return $result;

    }

}

$serie1 = new Serie(
    'Anne with an E',
    'Drama familiar',
    'Moira Walley-Beckett',
    'Serie de TV - 2017-2019 - 7 - 1h',
    'Inglés',
    'Canadá',
    8.7,
    250.76,
    0004,
    3,
    27
); 

$serie2 = new Serie(
    'The Walking Dead',
    'Drama/Terror/Suspenso',
    'Frank Darabont',
    'Serie de TV - 2010-2022 - 18 - 44min',
    'Inglés',
    'E.U.A',
    8.1,
    380.99,
    0005,
    11,
    153
); 

$serie3 = new Serie(
    'The Big Bang Theory',
    'Comedia/Romance',
    'Chuck Lorre - Bill Prady',
    'Serie de TV - 2007-2019 - 7 - 22min',
    'Inglés',
    'E.U.A',
    8.1,
    564.90,
    0006,
    12,
    280
); 

echo $serie1->getInformacion();
echo $serie2->getInformacion();
echo $serie3->getInformacion();

?>