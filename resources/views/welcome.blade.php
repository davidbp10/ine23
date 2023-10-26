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
          @foreach ($aProduct_offering as $product)
            <div class="col-sm-2 card card-body " style="border-color: white;">
              <a href="#"><img src={{ $product->imgUrl }} style="width: 300px; height: 300px;"></a>
              <h3>{{ $product->name }}</h3>
              <h5>{{ number_format($product->price * (1 - $product->discountPercent), 2, '.', '') }}€</h5>
              <p><s>{{ $product->price }}</s> {{ $product->discountPercent * 100 }}% de descuento</p>
            </div>
          @endforeach
          </div>

          
          <!-- SECTION: Some links -->
          <h2>Nuevos productos</h2>
          <div class="row mb-4" style="display:flex; justify-content:space-between;">

            @foreach ($aProduct_new as $product)
              @if (!$product->HasDiscount())
                <div class="col-sm-2 card card-body " style="border-color: white;">
                  <a href="#"><img src={{ $product->imgUrl }} style="width: 400px; height: 400px;"></a>
                  <h3>{{ $product->name }}</h3>
                  <h5>{{ $product->price }}€</h5>
                </div>
              @endif
            @endforeach

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