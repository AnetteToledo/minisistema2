<?php

class Pelicula{

    public function __construct(
        private string $titulo,
        private string $genero,
        private string $director,
        private string $resumen,
        private string $idioma,
        private string $pais,
        private float $calificacion,
        private float $precio,
        private int $id
    ){
        //echo "Soy una instancia de la clase Pelicula";
    }

    public function getInformacion(){

        $infor = "<center><b><h1> $this->titulo </h1></b> <br> Género: $this->genero <br>
                    Dirección: <i> $this->director</i> <br>                    
                    Resumen: $this->resumen <br>
                    Idioma: $this->idioma <br>
                    País: $this->pais <br>
                    Calificación: $this->calificacion <br>
                    Precio: $ $this->precio <br>
                    ID: $this->id <br><br></center>";

        if( $this->calificacion > 7){
            $infor .= "<center><h3><b><span style='color:green'> Está en el top!! </span></b></h3><br></center>";
        } else{
            $infor .= "<center><b><h3><span style='color:red'> No hay muy buenas críticas sobre esta película </span></b></h3><br><br></center>";
        }

        return $infor;
                        
    }

    }

$pelicula1 = new Pelicula(
    'Nace una estrella',
    'Romance/Drama',
    'Bradley Cooper',
    'AA - 2018 - 2h 15 min.',
    'Inglés',
    'E.U.A',
    7.5,
    175.00,
    0001
);

$pelicula2 = new Pelicula(
    'La matanza de Texas',
    'Terror',
    'Tobe Hooper',
    'C - 1974 - 1h 23 min.',
    'Inglés',
    'E.U.A',
    7.5,
    137.40,
    0002
);

$pelicula3 = new Pelicula(
    'Titanic ',
    'Romance/Drama',
    'James Cameron',
    'AA - 1997 - 3h 14 min.',
    'Inglés',
    'E.U.A',
    7.8,
    125.00,
    0003
);

echo $pelicula1->getInformacion();
echo $pelicula2->getInformacion();
echo $pelicula3->getInformacion();

?>
