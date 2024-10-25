<!--Hecho por Guillermo Troya Albarrán-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Videojuego</title>

  <style>
    html {
      background-color: aliceblue;
    }

    header {
      background-color: black;
      color: white;
      text-align: center;
      width: 100%;
      height: 8pc;
      margin-bottom: 6pc;
      align-items: center;

    }



    .grid-container>div {
      background-color: lavender;
      border: 1px solid black;
      text-align: center;
      font-size: 30px;
      width: 90%;
    }



    .post {
      padding: auto;
    }

    .posts-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 20px;
    }

    .post {
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      padding: 20px;
      text-align: left;
      font-size: 18px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .main-grid {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 20px;
    }

    .main {
      background-color: #eda477;
      border: 1px solid #ccc;
      padding: 120px;
      text-align: center;
      font-size: 28px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 18px;
      margin-bottom: 20px;



    }

    input {
      padding: auto;
      height: 10%;
      width: 10%;
      background-color: #7cbbc2;
      color: #e74e3f;
      font-size: 18px;


    }

    select {
      padding: auto;
      height: 10%;
      width: 10%;
      background-color: #7cbbc2;
      font-size: 18px;
      color: #e74e3f;
    }

    #enviar {
      background-color: #7cbbc2;
      font-size: 18px;
      color: #e74e3f;
    }
  </style>
</head>

<body>
  <header>
    <h1>Crear Videojuego</h1>
  </header>


  <div class="main">
    <form action="http://localhost/guillermo/videojuegos/mainJuego.php" method="post">
      <label for='nuevos'>Titulo del videojuego</label>
      <input type="text" name="titulo" id="titulo">
      <br>
      <br>
      <label for='nuevos'>Fecha de lanzamiento</label>
      <input type="date" name="fecha" id="fecha">
      <br>
      <br>
      <label for='desarrolladoraSelec'>Desarrolladora a la que pertenece:</label>
      <select name='desarrolladoraSelec' id='desarrolladoraSelec'>
        <option value=''></option>
        <option value='Epic Games'>Epic Games</option>
        <option value='Mojang'>Mojang</option>
        <option value='Psyonix'>Psyonix</option>
        <option value='Riot Games'>Riot Games</option>
        <option value='Naughty Dog'>Naughty Dog</option>
        <option value='CD Projekt Red'>CD Projekt Red</option>
        <option value='Ubisoft'>Ubisoft</option>
        <option value='Infinity Ward'>Infinity Ward</option>
        <option value='Supergiant Games'>Supergiant Games</option>
        <option value='InnerSloth'>InnerSloth</option>
      </select>
      <br>
      <br>
      <label for='categoriaSelect'>Categoria a la que pertenece</label>
      <select name='categoriaSelect' id='categoriaSelect'>
        <option value=''></option>
        <option value='Ciencia Ficción'>Ciencia Ficción</option>
        <option value='Aventura'>Aventura</option>
        <option value='Deportes'>Deportes</option>
        <option value='Tiro en Primera Persona'>Tiro en Primera Persona</option>
        <option value='Acción RPG'>Acción RPG</option>
        <option value='Acción Aventura'>Acción Aventura</option>
        <option value='Roguelike'>Roguelike</option>
        <option value='Multijugador'>Multijugador</option>
      </select>
      <br><br>
      <input type='submit' value='Crear' id="enviar">
    </form>
  </div>
</body>

</html>