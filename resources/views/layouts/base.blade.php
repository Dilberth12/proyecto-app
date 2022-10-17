<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/x-icon" href="https://i2.wp.com/images.squarespace-cdn.com/content/v1/5ba6a42e348cd90475481fc2/1551464865270-ATR7EHIDVI80ECLCLUIP/ke17ZwdGBToddI8pDm48kO-vKRLDEsx73V0P3H25au1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PIwERSZVbfPUorZ832YCBPPc3Ps4olqWhh64sQREZbtBYKMshLAGzx4R3EDFOm1kBS/Michael+8.jpg">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<header>
            <div class="imagen">
            <img src="https://static1.diariosur.es/www/multimedia/201909/30/media/cortadas/imagensensible-kYzD-U90285421336FWD-624x385@Diario%20Sur.jpg" alt="No image">
        </div>
        <div class="datos">
            <pre>
Telefono  938 746 845
Direccion Jr. Amazonas Cdr. 1 N° 120
            </pre>
        </div>
</header>


<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #3F729B;">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ asset('/') }}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Productos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="w" href="{{ asset('productos') }}">Lista</a></li>
                  <li><a class="dropdown-item" href="{{ asset('productos/create') }}">Nuevo</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Clientes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ asset('clientes') }}">Lista</a></li>
                  <li><a class="dropdown-item" href="{{ asset('clientes/create') }}">Nuevo</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Envios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ asset('envios') }}">Lista</a></li>
                  <li><a class="dropdown-item" href="{{ asset('envios/create') }}">Nuevo</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tipos
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ asset('tipos') }}">Lista</a></li>
                  <li><a class="dropdown-item" href="{{ asset('tipos/create') }}">Nuevo</a></li>

                </ul>
              </li>
          </div>
        </div>
      </nav>
   <hr>
   @yield('cuerpo')

   <footer>
    <br>
    <hr>
    <div class="fondo">
        <img class="f" src="https://logodownload.org/wp-content/uploads/2014/09/facebook-logo-3-1.png" alt="no"><a href="https://www.facebook.com/" target="_blank">Facebook</a><br>
        <img class="f" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Whatsapp_logo_svg.png/600px-Whatsapp_logo_svg.png" alt="no"><a href="https://web.whatsapp.com/" target="_blank">Whatsapp</a>
    </div>
    <div class="pie"><img id="l" src="https://idexperujapon.edu.pe/wp-content/uploads/2020/10/logo.png" alt="no"></div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>