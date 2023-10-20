@extends('templates.master')

@section('content-center')
  <!-- LAYOUT: CENTER -->
  <div class="container-fluid" style="margin-top:30px">
    <div class="row">
      <div class="col">

        <!-- BLOCK: LEFT -->
        <div class="col-sm-11"> <!-- col-sm-3 means three out of twelve columns -->

          <!-- SECTION: About me -->
          <h2>Ofertas del día</h2>
          <div class="row mb-4" style="display:flex; justify-content:space-between;">
            <div class="col-sm-2 card card-body " style="border-color: white;">
              <a href="#"><img src="img/press_de_banca.jpg" style="width: 300px; height: 300px;"></a>
              <h3>Banco de press</h3>
              <h5>69,99€</h5>
              <p><s>89,99€</s> 23% de descuento</p>
            </div>
            <div class="col-sm-2 card card-body" style="border-color: white;">
              <a href="#"><img src="img/dominadas.jpg" style="width: 300px; height: 300px;"></a>
              <h3>Barra de dominadas</h3>
              <h5>49,99€</h5>
              <p><s>59,99€</s> 17% de descuento</p>
            </div>
            <div class="col-sm-2 card card-body" style="border-color: white;">
              <a href="#"><img src="img/mancuernas.jpg" style="width: 300px; height: 300px;"></a>
              <h3>Mancuernas 25kg</h3>
              <h5>34,99€</h5>
              <p><s>49,99€</s> 30% de descuento</p>
            </div>
            <div class="col-sm-2 card card-body" style="border-color: white;">
              <a href="#"><img src="img/guantes.jpg" style="width: 300px; height: 300px;"></a>
              <h3>Guantes de boxeo</h3>
              <h5>47,99€</h5>
              <p><s>59,99€</s> 20% de descuento</p>
            </div>
          </div>
          
          <!-- SECTION: Some links -->
          <h2>Nuevos productos</h2>
          <div class="row mb-4" style="display:flex; justify-content:space-between;">
            <div class="col-sm-2 card card-body " style="border-color: white;">
              <a href="#"><img src="img/straps.jpg" style="width: 400px; height: 400px;"></a>
              <h3><em>Straps</em></h3>
              <h5>13,99€</h5>
            </div>
            <div class="col-sm-2 card card-body" style="border-color: white;">
              <a href="#"><img src="img/correr.jpg" style="width: 400px; height: 400px;"></a>
              <h3>Máquina de correr</h3>
              <h5>139,99€</h5>
            </div>
            <div class="col-sm-2 card card-body" style="border-color: white;">
              <a href="#"><img src="img/barra.jpg" style="width: 400px; height: 400px;"></a>
              <h3>Barra Z para biceps</h3>
              <h5>34,99€</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
@endsection


@section('content-right')
        <!-- BLOCK: RIGHT -->
        <div class="col mb-4"> <!-- col-sm-2 means two out of twelve columns -->
          <!-- SECTION: Cards -->
          <h6>Lo más vendido en suplementos</h6>
          <!-- Style are directly included in the style attribute just for illustrative reasons. -->
          <!-- However, including them in <style> or in a CSS file is a better practice. -->
          <ul class="list-group list-group-numbered">
            <li class="list-group-item"  style=" width: auto; height: 150px;">
              <a href="#"><img src="img/proteina1.jpg"  style=" width: 100px; height: 100px;"></a>
            </li>
            <li class="list-group-item" style=" width: auto; height: 150px;">
              <a href="#"><img src="img/proteina2.jpg"  style=" width: 100px; height: 100px;"></a>
            </li>
            <li class="list-group-item" style=" width: auto; height: 150px;">
              <a href="#"><img src="img/creatina1.jpg"  style=" width: 100px; height: 100px;"></a>
            </li>
            <li class="list-group-item" style=" width: auto; height: 150px;">
              <a href="#"><img src="img/proteina3.jpg"  style=" width: 100px; height: 100px;"></a>
            </li>
            <li class="list-group-item" style=" width: auto; height: 150px;">
              <a href="#"><img src="img/creatina2.jpg"  style=" width: 100px; height: 100px;"></a>
            </li>
          </ul>
          <a href="#" class="btn btn-primary" style="height: 40px; background-color: #00FF00; color:#000000">Ver más</a>
      </div>
    </div>
@endsection