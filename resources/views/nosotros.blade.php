<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/hola1.css">
    <link rel="stylesheet" type="text/css" href="css/nosotros.css">
    <title>Nosotros | Bazar</title>
    <meta name="viewport" content="width=device-witdh, user-scalable=no, initial-scale=1.0, maximum-scalable=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="icon/styles.css">
  </head>
  <body>
    <header class="main-header">
      <div class="container container--flex">
        <div class="logo-container column column--50">
          <h1 class="logo">Select the desired products</h1>
        </div>
        <div class="main-header__contactInfo column column--50">
          <p class="main-header__contactInfo__phone">
            <span class="icon-phone">999-999-999</span>
          </p>
          <p class="main-header__contactInfo__address">
            <span class="icon-map-pin-streamline">Urb Las Dunas 123 - Ica, Perú</span>
          </p>
      </div>
    </div>
    </header>
    <nav class="main-nav">
      <div class="container container--flex">
        <span class="icon-bars" id="btnmenu"></span>
        <ul class="menu" id="menu">
          <li class="menu__item"><a href="/inicio" class="menu__link">Inicio</a></li>
          <li class="menu__item"><a href="/nosotros" class="menu__link menu__link--select">Nosotros</a></li>
          <li class="menu__item"><a href="/catalago" class="menu__link">Venta</a></li>
          <li class="menu__item"><a href="/contacto" class="menu__link">Contacto</a></li>
          <li class="menu__item"><a href="{{ route('login') }}" class="menu__link">Login</a></li>
        </ul>
        <div class="social-icon">
          <a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
          <a href="" class="social-icon__link"><span class="icon-twitter"></span></a>
          <a href="" class="social-icon__link"><span class="icon-envelope"></span></a>
      </div>
    </nav>
    <section class="banner">
      <img src="img/banner-about1.jpg" alt="" class="banner__img">
      <div class="banner__content">Lo mejor de nosotros a tu servicio</div>
    </section>

    <main class="main">
      <section class="group group--color">
      <div class="container">
        <h2 class="main__title">Nuestra experencia</h2>
        <p class="main__txt">Para poder formar parte de un bazar, organizado o no por algún colectivo (de comerciantes, artistas, emprendedores o artesanos), el interesado debe contestar a la convocatoria previa,
          la cual puede ser vía Facebook (la más común en estos días) o de otra índole.</p>
      </div>
    </section>
  </main>

    <section class="group our-team">
      <h2 class="group__title">Nuestra experencia de persona</h2>
      <div class="container container--flex">
        <div class="column column--33">
          <h3 class="our-team__title">Alex</h3>
          <img src="img/bazar5.jpg" alt="" class="our-team__img">
          <p class="our-team__txt">Variedad, color, sabor, texturas, esparcimiento, creatividad,
            originalidad, convivencia  pero sobre todo los sueños y la experiencia,
            es lo que se vive en los bazares.</p>
        </div>
        <div class="column column--33">
          <h3 class="our-team__title">Esteban</h3>
          <img src="img/bazar6.jpg" alt="" class="our-team__img">
          <p class="our-team__txt">Variedad, color, sabor, texturas, esparcimiento, creatividad,
             originalidad, convivencia  pero sobre todo los sueños y la experiencia,
             es lo que se vive en los bazares.</p>
        </div>
        <div class="column column--33">
          <h3 class="our-team__title">Roberto</h3>
          <img src="img/bazar7.jpg" alt="" class="our-team__img">
          <p class="our-team__txt">Variedad, color, sabor, texturas, esparcimiento, creatividad,
             originalidad, convivencia  pero sobre todo los sueños y la experiencia,
             es lo que se vive en los bazares.</p>
        </div>
    </section>

    <main class="main">
    <footer class="main-footer">
      <div class="container container--flex">
        <div class="column column-33">
          <h2 class="column__title">¿Por que visitarnos?</h2>
          <p class="column__txt">Somos una pagina en donde podrá seleccionar los productos buscados, donde encontrará todo tipo de producto que
          busque en nuestro catalago.Entre los jóvenes, lo de hoy son los bazares, pues hay una interacción más padre entre ellos y por supuesto con el resto del público al que quieren dirigirse. Los bazares se prestan a
          la venta de ropa, accesorios, chácharas y alimentos, por decir algo, todo a un precio económico.</p>
        </div>
        <div class="column column-33">
          <h2 class="column__title">Contactos</h2>
          <p class="column__txt">Urb las Dunas 23 - Ica, Peru</p>
          <p class="column__txt">Telefono:999-999-999</p>
          <p class="column__txt">consulta@bazar.com</p>
        </div>
        <div class="column column-33">
          <h2 class="column__title">Siguenos en redes sociales</h2>
          <p class="column__txt"><a href="" class="icon-facebook">facebook</a></p>
          <p class="column__txt"><a href="" class="icon-twitter">Twitter</a></p>
          <p class="column__txt"><a href="" class="icon-youtube-play">Visita nuestro canal</a></p>
        </div>
        <p class="copy">&copy;Select the desired products | Todos los derechos son reservados</p>
      </div>
    </main>
    </footer>
    <script src="js/menu.js"></script>
  </body>
</html>
