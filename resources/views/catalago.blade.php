<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/hola1.css">
    <link rel="stylesheet" type="text/css" href="css/galeria.css">
    <title>Catalago | Bazar</title>
    <meta name="viewport" content="width=device-witdh, user-scalable=no, initial-scale=1.0, maximum-scalable=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="icon/styles.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

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
          <li class="menu__item"><a href="/nosotros" class="menu__link">Nosotros</a></li>
          <li class="menu__item"><a href="/catalago" class="menu__link menu__link--select">Venta</a></li>
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
      <img src="img/banner-catalago.jpg" alt="" class="banner__img">
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

  <div class="row">
                     <div class="col-md-12">
                            <div class="wrap">
                            <h1>Venta</h1>
                            <div class="strore-wrapper">
                             <div class="category_list">
                               <a  class="category_item" category="all">Todo</a>
                               <a  class="category_item" category="electrodomestico">Electrodomestico</a>
                               <a  class="category_item" category="linea-blanca">Linea Blanca</a>
                               <a  class="category_item" category="smartphones">Smartphones</a>
                               <a  class="category_item" category="preparacion-de-alimentos">Preparacion de Alimentos</a>
                               <a  class="category_item" category="audifonos">Audifonos</a>
                             </div>
                              <section class="products-list">
                                <div class="product-item" category="linea-blanca">
                                 <img src="img/lineablanca1.jpg" alt="">
                                 <c>Estufa</c>
                                 <b>$1,200</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="linea-blanca">
                                 <img src="img/lineablanca2.jpg" alt="">
                                 <c>Horno</c>
                                 <b>$800</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="linea-blanca">
                                 <img src="img/lineablanca3.jpg" alt="">
                                 <c>Lavadora</c>
                                 <b>$1,600</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="linea-blanca">
                                 <img src="img/lineablanca4.jpg" alt="">
                                 <c>Lavaplatos</c>
                                 <b>$1,400</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="smartphones">
                                 <img src="img/samsung.jpg" alt="">
                                 <c>Samsung Galaxy</c>
                                 <b>$1,900</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="smartphones">
                                 <img src="img/iphone1.jpg" alt="">
                                 <c>Iphone 7</c>
                                 <b>$2,400</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="smartphones">
                                 <img src="img/huawei.jpg" alt="">
                                 <c>Huawei</c>
                                 <b>$1,600</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="smartphones">
                                 <img src="img/motorola.jpg" alt="">
                                 <c>Motorola</c>
                                 <b>$1,700</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="electrodomestico">
                                 <img src="img/electrodomestico1.jpg" alt="">
                                 <c>Pantalla</c>
                                 <b>$2,600</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                               </div>
                                <div class="product-item" category="electrodomestico">
                                 <img src="img/electrodomestico2.jpg" alt="">
                                 <c>Bocina</c>
                                 <b>$1,200</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="electrodomestico">
                                 <img src="img/electrodomestico3.jpg" alt="">
                                 <c>Play Station 4</c>
                                 <b>$2,500</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="electrodomestico">
                                 <img src="img/electrodomestico4.jpg" alt="">
                                 <c>Xbox One</c>
                                 <b>$2,800</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="preparacion-de-alimentos">
                                 <img src="img/sandwichera.jpg">
                                 <c>Sandwichera</c>
                                 <b>$900</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="preparacion-de-alimentos">
                                 <img src="img/licuadora.jpg">
                                 <c>Licuadora</c>
                                 <b>$1,200</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="preparacion-de-alimentos">
                                 <img src="img/cafetera.jpg">
                                 <c>Cafetera</c>
                                 <b>$1,000</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="preparacion-de-alimentos">
                                 <img src="img/tostadora.jpg">
                                 <c>Tostadora</c>
                                 <b>$800</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="audifonos">
                                 <img src="img/audifonos1.jpg" alt="">
                                 <c>Audifonos Bluetooth</c>
                                 <b>$700</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="audifonos">
                                 <img src="img/audifonos2.jpg" alt="">
                                 <c>Audifonos Beats</c>
                                 <b>$1,400</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="audifonos">
                                 <img src="img/audifonos3.jpg" alt="">
                                 <c>Audifonos Mijaer</c>
                                 <b>$900</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                                <div class="product-item" category="audifonos">
                                 <img src="img/audifonos4.jpg" alt="">
                                 <c>Audifonos Wireless</c>
                                 <b>$1,200</b>
                                 <a href="{{ route('login') }}">Comprar</a>
                                </div>
                              </section>
                            </div>
                            </div>
                          </div>
                       </div>

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
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/nuevo.js" ></script>
  </body>
</html>
