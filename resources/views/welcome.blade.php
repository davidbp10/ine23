<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
      .fakeimg { height: 100px; background: #aaa; }
    </style>

    <title>My INE project</title>
  </head>

  <body>

    <!-- LAYOUT: HEADER -->

      <!-- SECTION: Title -->
      <div class="jumbotron text-left" style="margin: 0; padding: 20px; background-color: #000000">
        <div class="d-flex justify-content-between align-items-center" style="margin: 0 20px;">
          <h1 style="color: #00FF00">My Gym eShop</h1>
          <form class="form-inline" style="display: flex; align-items: center;">
            <input class="form-control mr-2" type="text" placeholder="Buscar" aria-label="Buscar" style="width: 400px; height: 40px; margin-right: 10px;">
            <a href="#" class="btn btn-primary" style="height: 40px; background-color: #00FF00; color:#000000">Buscar</a>
          </form>
        <div>
            <a href="#">Iniciar sesión</a>
            <a href="#"><img src="ico/carrito.jpg" style="width: 70px; height: 50px;"></a>
        </div>
    </div>
</div>



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

    <!-- LAYOUT: FOOTER -->
    <div class="jumbotron text-center" style="margin-bottom: 0; padding: 20px; background-color: #000000; color: #00FF00;">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>Acerca de</h4>
            <p>Información sobre nosotros.</p>
          </div>
          <div class="col-md-3">
            <h4>Navegación</h4>
              <p>Inicio</p>
              <p>Productos</p>
              <p>Servicios</p>
          </div>
          <div class="col-md-3">
            <h4>Ayuda</h4>
        
            <p>frecuentes</p>
            <p>Soporte</p>
        
          </div>
          <div class="col-md-3">
            <h4>Contacto</h4>
            <p>Información de contacto.</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>