<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilosprincipal.css"> <!-- Ruta al archivo CSS -->

    <style>
      .secion{
    display: flex;
    float: left;
    width: 100%;
    place-content: center;
    margin-top: 20px;
  }
  .secion2{
    display: flex;
    float: left;
    width: 100%;
    place-content: center;
    margin-top: 20px;
  }

  .card {
    --font-color: #ffffff;
    --font-color-sub: #ffffff;
    --bg-color: #000000;
    --main-color: #ff0000;
    --main-color2: #ffffff;
    --main-focus: #2d8cf0;
    width: 230px;
    height: 300px;
    background: var(--bg-color);
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    padding: 20px;
    margin-left: 40px;
    gap: 10px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }
  
  .card:last-child {
    justify-content: flex-end;
  }
  
  .card-img {
    display: flex;
    justify-content: center;
  }
  
  .card-img .img {
   width: 190px;
   height: 135px;
  }

  .img {
    width: 200px;
    height: 140px;
}
  
  .card-title {
    font-size: 20px;
    font-weight: 500;
    text-align: center;
    color: var(--font-color);
  }
  
  .card-subtitle {
    font-size: 14px;
    font-weight: 400;
    color: var(--font-color-sub);
  }
  
  .card-divider {
    width: 100%;
    border: 1px solid var(--main-color2);
    border-radius: 50px;
  }
  
  .card-footer {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
  
  .card-price {
    font-size: 20px;
    font-weight: 500;
    color: var(--font-color);
  }
  
  .card-price span {
    font-size: 20px;
    font-weight: 500;
    color: var(--font-color-sub);
  }
  
  .card-btn {
    height: 35px;
    background: var(--bg-color);
    border: 2px solid var(--main-color2);
    border-radius: 5px;
    padding: 0 15px;
    transition: all 0.3s;
  }
  
  .card-btn svg {
    width: 100%;
    height: 100%;
    fill: var(--main-color2);
    transition: all 0.3s;
  }
  
  .card-btn:hover {
    border: 2px solid var(--main-focus);
  }
  
  .card-btn:hover svg {
    fill: var(--main-focus);
  }
  
  .card-btn:active {
    transform: translateY(3px);
  }

/* buscador */

.container {
  display: flex;
  float: right;
  margin-top: -45px;
  justify-content: center;
  align-items: center;
  height: 25px;
}

.input {
  max-width: 190px;
  height: 100%;
  outline: none;
  font-size: 10px;
  font-weight: 500;
  background-color: #ffffff;
  caret-color: #f7f7f8;
  color: #fff;
  padding: 7px 10px;
  border: 2px solid transparent;
  border-top-left-radius: 7px;
  border-bottom-left-radius: 7px;
  margin-right: 1px;
  transition: all .2s ease;
}

.input:hover {
  border: 2px solid rgba(255, 255, 255, 0.16);
}

.input:focus {
  border: 2px solid #a970ff;
  background-color: #0e0e10;
}

.search__btn {
  border: none;
  cursor: pointer;
  background-color: rgba(42, 42, 45, 1);
  border-top-right-radius: 7px;
  border-bottom-right-radius: 7px;
  height: 44px;
  width: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.search__btn:hover {
  background-color: rgba(54, 54, 56, 1);
}
  
  @keyframes glowing_401 {
    0% {
      transform: rotate(0);
    }
  
    100% {
      transform: rotate(360deg);
    }
  }

  .carousel-container {
      position: relative;
      max-width: 100%;
      margin: 0 auto;
      overflow: hidden;
    }
    
    .carousel-slide {
      display:flex;
      animation: slide 10s infinite;
    }
    
    .carousel-slide img {
      width: 100%;
      height: 500px;
    }
    
    /* Estilos de los controles del carrusel */
    .carousel-control {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 10px;
      cursor: pointer;
      z-index: 2;
    }
    
    /* Animación del carrusel */
    @keyframes slide {
      0% {
        transform: translateX(0);
      }
      20% {
        transform: translateX(0);
      }
      25% {
        transform: translateX(-100%);
      }
      45% {
        transform: translateX(-100%);
      }
      50% {
        transform: translateX(-200%);
      }
      70% {
        transform: translateX(-200%);
      }
      75% {
        transform: translateX(-100%);
      }
      95% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(0);
      }
    }
    </style>

  </head>
<body>

<div class="carousel-container">
    <div class="carousel-slide">
      <img src="img/kart1.jpg" alt="Imagen 1">
      <img src="img/kart2.jpg" alt="Imagen 2">
      <img src="img/kart3.jpeg" alt="Imagen 3">
      <img src="img/kart4.JPG" alt="imagen 4">
      <img src="img/kart5.jpeg" alt="imagen 5">
      <img src="img/kart6.jpeg" alt="imagen 6">
    </div>
  </div>
    
<div class="secion">

  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart1.jpg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>

  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart1.jpg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>

  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart3.jpeg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>
  
</div>

<div class="secion2">
      
  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart1.jpg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>

  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart1.jpg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>

  <div class="card">
    <div class="card-img">
        <div>
            <img src="img/kart1.jpg" class="img">
        </div>
    </div>
    <div class="card-title">Product title
    </div>
    <div class="card-subtitle">Product description. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
    <hr class="card-divider">
    <div class="card-footer">
        <div class="card-price"><span>$</span> 123.45</div>
        <button class="card-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="m397.78 316h-205.13a15 15 0 0 1 -14.65-11.67l-34.54-150.48a15 15 0 0 1 14.62-18.36h274.27a15 15 0 0 1 14.65 18.36l-34.6 150.48a15 15 0 0 1 -14.62 11.67zm-193.19-30h181.25l27.67-120.48h-236.6z"></path><path d="m222 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m368.42 450a57.48 57.48 0 1 1 57.48-57.48 57.54 57.54 0 0 1 -57.48 57.48zm0-84.95a27.48 27.48 0 1 0 27.48 27.47 27.5 27.5 0 0 0 -27.48-27.47z"></path><path d="m158.08 165.49a15 15 0 0 1 -14.23-10.26l-25.71-77.23h-47.44a15 15 0 1 1 0-30h58.3a15 15 0 0 1 14.23 10.26l29.13 87.49a15 15 0 0 1 -14.23 19.74z"></path></svg>
        </button>
    </div>
  </div>


  <div style="position: absolute; top: 20px; right: 20px; text-align: right;">
    <h1>Bienvenido a la tienda</h1>

    <a href="index.php?Controllers=UserController&action=mostrarLogin">
        <button style="padding: 10px 20px; margin: 10px; font-size: 16px;">Iniciar Sesión</button>
    </a>

    <a href="index.php?Controllers=UserController&action=mostrarregistro">
        <button style="padding: 10px 20px; margin: 10px; font-size: 16px;">Registrarse</button>
    </a>
</div>



</div>
</body>