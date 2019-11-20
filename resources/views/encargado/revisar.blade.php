@extends('encargado.home')
@section('seccion')

<div class="row">
                   <div class="col-md-12">
                          <div class="wrap">
                            <br>
                          <h1>Catalago</h1>
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
                               <a>Estufa</a>
                              </div>
                              <div class="product-item" category="linea-blanca">
                               <img src="img/lineablanca2.jpg" alt="">
                               <a>Horno</a>
                              </div>
                              <div class="product-item" category="linea-blanca">
                               <img src="img/lineablanca3.jpg" alt="">
                               <a>Lavadora</a>
                              </div>
                              <div class="product-item" category="linea-blanca">
                               <img src="img/lineablanca4.jpg" alt="">
                               <a>Lavaplatos</a>
                              </div>
                              <div class="product-item" category="smartphones">
                               <img src="img/samsung.jpg" alt="">
                               <a>Samsung Galaxy</a>
                              </div>
                              <div class="product-item" category="smartphones">
                               <img src="img/iphone1.jpg" alt="">
                               <a>Iphone 7</a>
                              </div>
                              <div class="product-item" category="smartphones">
                               <img src="img/huawei.jpg" alt="">
                               <a>Huawei</a>
                              </div>
                              <div class="product-item" category="smartphones">
                               <img src="img/motorola.jpg" alt="">
                               <a>Motorola</a>
                              </div>
                              <div class="product-item" category="electrodomestico">
                               <img src="img/electrodomestico1.jpg" alt="">
                               <a>Pantalla</a>
                             </div>
                              <div class="product-item" category="electrodomestico">
                               <img src="img/electrodomestico2.jpg" alt="">
                               <a>Bocina</a>
                              </div>
                              <div class="product-item" category="electrodomestico">
                               <img src="img/electrodomestico3.jpg" alt="">
                               <a>Play Station 4</a>
                              </div>
                              <div class="product-item" category="electrodomestico">
                               <img src="img/electrodomestico4.jpg" alt="">
                               <a>Xbox One</a>
                              </div>
                              <div class="product-item" category="preparacion-de-alimentos">
                               <img src="img/sandwichera.jpg">
                               <a>Sandwichera</a>
                              </div>
                              <div class="product-item" category="preparacion-de-alimentos">
                               <img src="img/licuadora.jpg">
                               <a>Licuadora</a>
                              </div>
                              <div class="product-item" category="preparacion-de-alimentos">
                               <img src="img/cafetera.jpg">
                               <a>Cafetera</a>
                              </div>
                              <div class="product-item" category="preparacion-de-alimentos">
                               <img src="img/tostadora.jpg">
                               <a>Tostadora</a>
                              </div>
                              <div class="product-item" category="audifonos">
                               <img src="img/audifonos1.jpg" alt="">
                               <a>Audifonos Bluetooth</a>
                              </div>
                              <div class="product-item" category="audifonos">
                               <img src="img/audifonos2.jpg" alt="">
                               <a>Audifonos Beats</a>
                              </div>
                              <div class="product-item" category="audifonos">
                               <img src="img/audifonos3.jpg" alt="">
                               <a>Audifonos Mijiaer</a>
                              </div>
                              <div class="product-item" category="audifonos">
                               <img src="img/audifonos4.jpg" alt="">
                               <a>Audifonos Wireless</a>
                              </div>
                            </section>
                          </div>
                          </div>
                        </div>
                     </div>
@endsection
