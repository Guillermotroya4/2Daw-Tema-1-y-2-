<!--Hecho por Guillermo Troya Albarrán-->
<?php

class Videojuego
{
    public $titulo;
    public $fechaPublicacion;
    private $desarrolladora;
    private $categoria;

    public function __construct($titulo, $fechaPublicacion, Desarrolladora $desarrolladora, Categoria $categoria)
    {
        $this->titulo = $titulo;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->desarrolladora = $desarrolladora;
        $this->categoria = $categoria;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getFechaPublicacion()
    {
        return $this->fechaPublicacion;
    }

    public function getDesarrolladora()
    {
        return $this->desarrolladora;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}

class Categoria
{
    public $id;
    public $nombre;

    public function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getId()
    {
        return $this->id;
    }
}

class Desarrolladora
{
    public $id;
    public $nombre;

    public function __construct($nombre, $id)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
}


$videojuegos = [
    new Videojuego("Fortnite", "2015-05-19", new Desarrolladora("Epic Games", 1), new Categoria(1, "Ciencia Ficción")),
    new Videojuego("Minecraft", "2010-10-20", new Desarrolladora("Mojang", 2), new Categoria(2, "Aventura")),
    new Videojuego("Rocket League", "2015-07-07", new Desarrolladora("Psyonix", 3), new Categoria(3, "Deportes")),
    new Videojuego("Valorant", "2020-06-02", new Desarrolladora("Riot Games", 4), new Categoria(4, "Tiro en Primera Persona")),
    new Videojuego("The Last of Us Part II", "2020-06-19", new Desarrolladora("Naughty Dog", 5), new Categoria(5, "Aventura")),
    new Videojuego("Cyberpunk 2077", "2020-12-10", new Desarrolladora("CD Projekt Red", 6), new Categoria(6, "Acción RPG")),
    new Videojuego("Assassin's Creed Valhalla", "2020-11-10", new Desarrolladora("Ubisoft", 7), new Categoria(7, "Acción Aventura")),
    new Videojuego("Call of Duty: Warzone", "2020-03-10", new Desarrolladora("Infinity Ward", 8), new Categoria(8, "Tiro en Primera Persona")),
    new Videojuego("Hades", "2020-09-17", new Desarrolladora("Supergiant Games", 9), new Categoria(9, "Roguelike")),
    new Videojuego("Among Us", "2018-06-15", new Desarrolladora("InnerSloth", 10), new Categoria(10, "Multijugador"))
];
?>