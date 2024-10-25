<!--Hecho por Guillermo Troya Albarrán-->
<?php
class Coche {
    public $imagen;
    public $modelo;
    public $color;
    public $precioDia;

    public function __construct($imagen, $modelo, $color, $precioDia) {
        $this->imagen = $imagen;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precioDia = $precioDia;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getColor() {
        return $this->color;
    }

    public function getPrecioDia() {
        return $this->precioDia;
    }
}

$coches = [
    new Coche('img/coche1.jpeg', 'Toyota Corolla', 'gris', 50),
    new Coche('img/coche2.jpeg', 'Ford Fiesta', 'Azul', 90),
    new Coche('img/coche3.jpeg', 'Chevrolet Spark', 'Blanco', 80),
    new Coche('img/coche4.jpeg', 'Honda Civic', 'Negro', 125),
    new Coche('img/coche5.jpeg', 'Volkswagen Golf', 'Gris', 70)
];

function pintarCoches($coches) {
    foreach ($coches as $Coche) {
        echo "<div>";
        echo '<img src="' . $Coche->getImagen() . '" alt="' . $Coche->getModelo() . '">';
        echo '<br>';
        echo "<b>Modelo: </b>" . $Coche->getModelo();
        echo '<br>';
        echo "<b>Color: </b>" . $Coche->getColor();
        echo '<br>';
        echo "<b>Precio de alquiler al día: </b>" . $Coche->getPrecioDia();
        echo '<br>';
        echo "</div><hr>";
    }
}
