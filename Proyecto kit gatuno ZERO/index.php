<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <!--Se enlaza index.php con la hoja de estilos style.css-->
  

<link type="text/css" rel="stylesheet" href="style.css">

  <title>Kit Gato Protegido</title>
  <!--Se le agrega una imagen como fondo al body-->
  <style>
    body {
      background-image: url("image008.jpg");
    }
  </style>

</head>

<body>

  
  <!--Parte que se mantiene en las 3 paginas -->
  <!--Se agrega una foto de titulo y el logo-->
  <header class="center">
    <div id="fototitulo">
      <img class="fotoTit" src="image001.png" />
      <img class="fotoTit" id="logo" src="image007.png" />
    </div>
  </header>

  <div class="center">
    <!-- Se agrega el boton para la seccion de Temperatura-->
    <div class="btn-1">
      <button style="height: 100px; width: 300px;"><a href="index1.php" class="btn">Ver Mediciones de
          Temperatura</a></button>
    </div>
    <!--Se agrega el boton para la seccion de Eventos-->
  
    <div class="btn-2">
  
      <button style="height: 100px; width: 300px;"><a href="index2.php" class="btn">Ver Eventos Detectados</a></button>
    </div>
  </div>
  <!--Fin Parte que se mantiene en las 3 paginas -->

  <!--Parrafo con el texto descriptivo -->
  <div class="center">
    <div id="textdescriptivo">
      <p>
        <!--Strong para ennegrecer el titulo -->
        <strong>
          <h1>Descripción del proyecto</h1>
        </strong>
        <i>Esta primera entrega consiste en el prototipo de la UI(interfaz de usuario) del kit gatuno.
          Esto consiste en que el sitio web creado será el que despliegue tanto los datos capturados por los sensores
          como
          los eventos generados por el hardware de la placa Arduino.
          Dado que el hardware aun no ha sido ni diseñado ni desarrollado, se desplegarán datos sintéticos, osea
          ficticios
          que nos permitan realizar la prueba de este concepto de interfaz de usuario. </i>
      </p>
    </div>
  </div>
  <!--Resumen de la seccion de temperatura-->
  <div class="center">
    <div id="temperatura">
      <div id="temp">
        <h1>Temperatura</h1>
      </div>
          <li>A la fecha se han realizado 8 mediciones.</li>
        <li>La temperatura mas alta registrada es 23°</li>
        <li>La temperatura mas baja registrada es 12°</li>
        <li>La temperatura promedio es 17°</li>
      </ul>
    </div>

    <!--Resumen de la seccion de eventos-->
    <div id="eventos">
      <div id="even">
        <h1>Eventos</h1>
      </div>
      <ul>
        <li>A la fecha se han detectado 12 eventos.</li>
        <li>Se han detectado 2 eventos de temperatura fuera de rango.</li>
        <li>Se han detectado 4 eventos de proximidad a la puerta gatera.</li>
      </ul>
    </div>
  </div>


</body>

</html>