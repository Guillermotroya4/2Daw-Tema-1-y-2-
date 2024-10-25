<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mi Blog</title>
    <style>
        header {
            background-color: black;
            color: white;
            text-align: center;
            width: 100%;
            
            

        }

        .grid-container {
            display: grid;
            grid-template-columns: 20% auto;
            gap: 10px;
        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid black;
            text-align: center;
            font-size: 30px;
            width: 80%;
        }

        #menu {
            background-color: #e2e6d1;
            height: 100%;

        }
        .post{
            padding:auto;
        }

        /* Cambiamos el layout a una sola columna para los posts */
        .posts-grid {
            display: flex;
            flex-direction: column; /* Alinea los posts verticalmente */
            gap: 20px; /* Espacio entre cada post */
            padding: 20px;
        }

        /* Definimos estilo de los cuadros de los posts */
        .post {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: left;
            font-size: 18px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 20px; /* Espacio debajo de cada post */
        }

        .post h2 {
            font-size: 24px;
        }

        .post p {
            margin: 10px 0;
        }

        .post button {
            margin-top: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            display: block;
            border-radius: 5px;
        }

        nav ul li a:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <nav id="header">
        <header>
            <?php
            echo "<h1>Mi Blog</h1>";
            ?>
        </header>
    </nav>

    <div class="grid-container">
        <div>
            <nav id="menu">
                <ul>
                    <?php
                    echo "<li><a href='#'>Inicio</a></li>";
                    echo "<br>";
                    echo "<li><a href='#'>Sobre mi</a></li>";
                    echo "<br>";
                    echo "<li><a href='#'>Blog</a></li>";
                    echo "<br>";
                    echo "<li><a href='#'>Contacto</a></li>";
                    ?>
                </ul>
            </nav>
        </div>
        <div>
            <div class="posts-grid">
                <?php

                class Post
                {
                    private string $title;
                    private string $content;
                    private array $tags;
                    private int $likes;

                    public function __construct(string $title, string $content, $tags = [])
                    {
                        $this->title = $title;
                        $this->content = $content;
                        $this->tags = $tags;
                        $this->likes = 5; // Valor inicial de los likes
                    }

                    public function getTitle()
                    {
                        return $this->title;
                    }
                    public function getContent()
                    {
                        return $this->content;
                    }

                    public function getTags()
                    {
                        return $this->tags;
                    }
                    public function getLikes()
                    {
                        return $this->likes;
                    }

                    public function incrementLikes()
                    {
                        $this->likes++;
                    }
                }

                class Tags
                {
                    private $tags;

                    public function __construct(string $tags)
                    {
                        $this->tags = $tags;
                    }

                    public function getTags()
                    {
                        return $this->tags;
                    }
                }

                function generarPost(): void
                {
                    $posts = [
                        new Post("Titulo del primer post", "Este es el contenido del primer post de mi blog. Aquí puedes escribir sobre cualquier tema que te interese.", [new Tags("#Tecnología"), new Tags("#Programación"), new Tags("#HTML")]),
                        new Post("Titulo del segundo post", "Este es el segundo post. Puedes escribir sobre temas diferentes y ofrecer tu opinión o experiencias.", [new Tags("#Viajes"), new Tags("#Aventura"), new Tags("#Fotografía")]),
                        new Post("Titulo del tercer post", "Este es el tercer post. Explora temas como la salud y el bienestar.", [new Tags("#Salud"), new Tags("#Bienestar"), new Tags("#EstiloDeVida")])
                    ];

                    foreach ($posts as $index => $Post) {
                        echo "<div class='post'>"; // Usamos la clase 'post' para crear los cuadros
                        echo "<h2>" . $Post->getTitle() . "</h2>";
                        echo "<p>" . $Post->getContent() . "</p>";
                        echo "<p>Tags: ";
                        foreach ($Post->getTags() as $Tags) {
                            echo  $Tags->getTags() . " ";
                        }
                        echo "</p>";
                        echo "<p>Likes: " . $Post->getLikes() . "</p>";
                        ?>
                        <button type="button" onclick="alert('Funcionalidad de likes pendiente de implementar.')">Me gusta</button>
                        <?php
                        echo "</div>";
                    }
                }

                generarPost();
                ?>
            </div>
        </div>
    </div>

</body>

</html>

0