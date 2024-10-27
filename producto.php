<!--Hecho por Guillermo Troya Albarrán-->
<?php
class Producto{
    public $imagen;
    public $categoria;
    public $nombre;
    public $precio;

    public function __construct($imagen,$categoria,$nombre,$precio){
        $this->imagen = $imagen;
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->precio = $precio;
    } 


    public function getImagen(){
        return $this->imagen;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPrecio(){
        return $this->precio;
    }

} 

$productos = [
    new Producto('img/aspiradora.png','Limpieza','Aspiradora','87'),
    new Producto('img/pastadientes.png','Higiene','Pasta de dientes','51'),
    new Producto('img/gel.png','Higiene','Gel de ducha','74'),
    new Producto('img/espaguets.jpg','Comida','Espaguetis','25'),
    new Producto('img/macarrones.jpg','Comida','Macarrones','36'),
    new Producto('img/pesas.jpg','Deporte','Pesas para hacer en casa','98'),
    new Producto('img/cinta.jpg','Deporte','Cinta de correr para la casa','45')
    ];

