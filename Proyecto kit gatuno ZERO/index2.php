<!doctype html>
<!--Tipo de documento-->
<html lang="en">
  <!--Lenguaje del html-->

<head>

  <meta charset="utf-8">
  <!--Codificacion-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--tipo de link, texto y estilo en css-->
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
  <!--Fin Parte que se mantiene en las 3 paginas -->
  <header class="center">
    <div id="fototitulo">
      <!--Link de las imagenes utilizadas-->
      <img class="fotoTit" src="image001.png" />
      <img class="fotoTit" id="logo" src="image007.png" />
    </div>
  </header>

  <div class="center">
    <div class="btn-1">
      <button style="height: 100px; width: 300px;"><a href="index1.php" class="btn">Ver Mediciones de
          Temperatura</a></button>
    </div>
    <div class="btn-2">
      <button style="height: 100px; width: 300px;"><a href="index.php" class="btn">Pagina Principal</a></button>
    </div>
  </div>
  <!--Fin Parte que se mantiene en las 3 paginas -->
  <div class="center">
    <div id="eventos">
      <div id="even">
        <h1>Eventos</h1>
      </div>
      <ul>
        <!--Lista-->
        <li>A la fecha se han detectado 12 eventos.</li>
        <li>Se han detectado 4 eventos de temperatura fuera de rango.</li>
        <li>Se han detectado 2 eventos de proximidad a la puerta gatera.</li>
      </ul>
    </div>
  </div>

  
  <div class="center">
    <h1 id="detalle"> Detalles: </h1>
    <table class="table">
      <thead>
        <!--Resumen de tablas-->
        <tr>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Eventos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-label="">25/04</td>
          <td data-label="">09:16</td>
          <td data-label="">Proximidad puerta gatera</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">10:30</td>
          <td data-label="">Apertura de ventanas</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">11:11</td>
          <td data-label="">Cierre de ventanas</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">12:56</td>
          <td data-label="">Proximidad puerta gatera</td>
        </tr>

        <tr>
          <td data-label="">25/04</td>
          <td data-label="">14:34</td>
          <td data-label="">Apertura de ventanas</td>
        </tr>
        <tr>
          <td data-label="">25/04</td>
          <td data-label="">15:34</td>
          <td data-label="">Cierre de ventanas</td>
        </tr>
        <!--Fin de tablas-->

      </tbody>
    </table>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<!--Link adjunto para diseño de bootstrap-->

  </div>


</body>
<!--Cierre de el cuerpo(body)-->
</html>