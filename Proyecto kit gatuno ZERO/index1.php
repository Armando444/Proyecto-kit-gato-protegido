<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="styletabla.css" />
  <title>Kit Gato Protegido</title>
  <style>
    body {
      background-image: url("image008.jpg");
    }
  </style>
</head>

<body>
  <!--Parte que se mantiene en las 3 paginas -->
  <header class="center">
    <div id="fototitulo">
      <img class="fotoTit" src="image001.png" />
      <img class="fotoTit" id="logo" src="image007.png" />
    </div>
  </header>

  <div class="center">
    <div class="btn-1">
      <button style="height: 100px; width: 300px;"><a href="index.php" class="btn">Pagina Principal</a></button>
    </div>
    <div class="btn-2">
      <button style="height: 100px; width: 300px;"><a href="index2.php" class="btn">Ver Eventos Detectados</a></button>
    </div>
  </div>
  <!--Fin Parte que se mantiene en las 3 paginas -->
  <div class="center">
    <div id="temperatura">
      <div id="temp">
        <h1>Temperatura</h1>
      </div>
      <ul>
        <li>A la fecha se han realizado 4 mediciones.</li>
        <li>La temperatura mas alta registrada es 23°</li>
        <li>La temperatura mas baja registrada es 15°</li>
        <li>La temperatura promedio es 18,5°</li>
      </ul>
    </div>
  </div>


  <div class="center">
    <h1 id="detalle"> Detalles: </h1>
    <table class="table">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Temperatura</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="">25/04</td>
          <td data-label="">09:16</td>
          <td data-label="">15°C</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">10:54</td>
          <td data-label="">19°C</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">11:11</td>
          <td data-label="">23°C</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">12:56</td>
          <td data-label="">17°C</td>
        </tr>
        <tr>
          <td data-label="">25/04</td>
          <td data-label="">14:56</td>
          <td data-label="">17°C</td>
        </tr>
        
      </tbody>
    </table>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />



  </div>


</body>

</html>