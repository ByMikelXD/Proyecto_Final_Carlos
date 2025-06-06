<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web con Carrusel, Cards y Login</title>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to bottom, black 5%, red 100%);
    }

    .carousel-container {
      overflow: hidden;
      position: relative;
      width: 100%;
      max-width: 1200px;
      margin: 30px auto;
      border-radius: 10px;
    }

    .carousel {
      display: flex;
      width: calc(100% * 4);
      animation: slide 20s linear infinite;
    }

    .carousel img {
      width: 20%;
      flex-shrink: 0;
      object-fit: cover;
    }

    @keyframes slide {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }

    .container1, .container2, .container3 {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      width: 100%;
      margin: 30px auto;
      gap: 30px;
    }


    .card2 {
      position: relative;
      width: 900px;
      background: #000;
      border-radius: 14px;
      display: left;
      flex-direction: column;
      overflow: hidden;
    }

    .card {
      position: relative;
      width: 900px;
      background: #000;
      border-radius: 14px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .bg {
      position: absolute;
      z-index: -1;
      inset: -4px;
      border-radius: 16px;
      overflow: hidden;
    }

    .uwu {
      filter: blur(8px);
      transition: filter 0.3s;
    }

    .content {
      position: relative;
      padding: 14px 16px;
      color: white;
      text-align: center;
    }

    .img {
      height: 180px;
      width: 180px;
      margin: 0 auto;
      background-color: rgba(121, 121, 121, 0.2);
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .img img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }

    .h1 {
      margin: 1em 0 0.5em;
      font-size: 1em;
      font-weight: 600;
    }

    .p {
      font-size: 0.75em;
      color: white;
    }

    .p p {
      margin-top: 1em;
      padding: 0.5em;
      background-color: #0003;
      border-radius: 1em;
    }

    .box {
      width: auto;
      padding: 15px;
      margin: 20px auto 0;
      background: transparent;
      color: white;
      font-weight: bold;
      border: 2px solid white;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .box:hover {
      background-color: white;
      color: black;
    }

    a {
      display: block;
      text-align: center;
      margin: 40px auto;
      text-decoration: none;
      font-weight: bold;
      color: #007bff;
    }

    h1{
      color:white;
    }
    

  </style>
</head>
<body>

  <!-- Carrusel -->
  <div class="carousel-container">
    <div class="carousel">
      <img src="img/kart1.jpg" alt="Imagen 1">
      <img src="img/kart2.jpg" alt="Imagen 2">
      <img src="img/kart3.jpeg" alt="Imagen 3">
      <img src="img/kart4.jpg" alt="Imagen 4">
      <img src="img/kart5.jpeg" alt="Imagen 5">
      <img src="img/kart6.jpeg" alt="Imagen 6">
    </div>
  </div>

  <h1>Eventos disponibles para reservar</h1>
  <br>
<div class="container1">
  <div class="card">
    <div class="bg uwu"></div>
    <div class="bg"></div>
    <div class="content">
          <div class="img">
                <img src="img/circuitos/spa.avif">
          </div>
          <div class="h1">
              Spa-Francorchamps
          </div>
          <div class="p">
            Longitud: 7,004 km
          <p>
            El circuito de Spa-Francorchamps, o simplement Spa, es un circuito de carreras famoso ubicado en las Ardenas belgas, cerca de las ciudades de Spa, Francorchamps, Malmedy y Stavelot. Es uno de los circuitos más reconocidos y apreciados por pilotos y aficionados, conocido por su desafiante trazado y la secuencia de curvas Eau Rouge – Raidillon. 
          </p>
          </div>
    </div>
  </div>

  <div class="card">
    <div class="bg uwu"></div>
    <div class="bg"></div>
    <div class="content">
          <div class="img">
                <img src="img/circuitos/austria.png">
          </div>
          <div class="h1">
                Austria
          </div>
          <div class="p">
            Longitud: 4,318 km
            <p>
              El circuito Red Bull Ring, ubicado en Spielberg, Austria, es un autódromo famoso por su historia y por ser un escenario de gran atractivo para la Fórmula 1 y el MotoGP. Originalmente conocido como Österreichring, ha sido remodelado y renombrado varias veces, incluyendo su etapa como A1-Ring, antes de ser comprado por Red Bull y volver a su nombre actual. 
            </p>
          </div>
    </div>
  </div>

    <div class="card2">
      <div class="bg uwu"></div>
      <div class="bg"></div>
      <div class="content">
            <div class="img">
                  <img src="img/circuitos/arabia saudi.png">
            </div>
            <div class="h1">
                  Arabia Saudi
            </div>
            <div class="p">
                  Longitud: 6,174 km
                  <p>
                    El Circuito de Jeddah, en Arabia Saudita, es el lugar donde se celebra el Gran Premio de Arabia Saudita de Fórmula 1. Es un circuito urbano de alta velocidad, conocido por su longitud (6.175 km) y por ser considerado uno de los más peligrosos del calendario actual. 
                  </p>
            </div>
      </div>
    </div>
</div>

<div class="container2">
  <div class="card">
    <div class="bg uwu"></div>
    <div class="bg"></div>
    <div class="content">
          <div class="img">
                <img src="img/circuitos/eeuu.png">
          </div>
          <div class="h1">
                EE.UU
          </div>
          <div class="p">
            Longitud: 5,513 km
          </div>
    </div>
  </div>

    <div class="card">
      <div class="bg uwu"></div>
      <div class="bg"></div>
      <div class="content">
            <div class="img">
                  <img src="img/circuitos/francia.png">
            </div>
            <div class="h1">
                  Francia
            </div>
            <div class="p">
                  Longitud: 5,842 km
            </div>
      </div>
    </div>

      <div class="card">
        <div class="bg uwu"></div>
        <div class="bg"></div>
        <div class="content">
              <div class="img">
                    <img src="img/circuitos/mexico.png">
              </div>
              <div class="h1">
                    Abu Dabi
              </div>
              <div class="p">
                  Longitud: 4,304 km
              </div>
        </div>
      </div>  
</div>

<div class="container3">
      <div class="card">
            <div class="bg uwu"></div>
            <div class="bg"></div>
            <div class="content">
                  <div class="img">
                        <img src="img/circuitos/silverston.png">
                  </div>
                  <div class="h1">
                        Silverston
                  </div>
                  <div class="p">
                        Longitud: 5,891 km
                  </div>
            </div>
          </div>
  
            <div class="card">
              <div class="bg uwu"></div>
              <div class="bg"></div>
              <div class="content">
                    <div class="img">
                          <img src="img/circuitos/hungria.png">
                    </div>
                    <div class="h1">
                          Hungria
                    </div>
                    <div class="p">
                        Longitud: 4,381 km
                    </div>
              </div>
            </div>

            <div class="card">
                  <div class="bg uwu"></div>
                  <div class="bg"></div>
                  <div class="content">
                        <div class="img">
                              <img src="img/circuitos/baku.png">
                        </div>
                        <div class="h1">
                            Azerbaiyán
                        </div>
                        <div class="p">
                              Longitud: 6,003 km
                        </div>
                  </div>
                </div>
</div>

<a href="index.php?Controllers=EventosController&action=listar">Ver eventos</a>

</body>
</html>
