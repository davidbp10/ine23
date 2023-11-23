<div class="jumbotron text-left" style="margin: 0; padding: 20px; background-color: #000000">
    <div class="d-flex justify-content-between align-items-center" style="margin: 0 20px;">
        <a href="{{ route('home') }}" style="text-decoration: none;"><h1 style="color: #00FF00">My Gym eShop</h1></a>
        <form class="form-inline" style="display: flex; align-items: center;">
            <input class="form-control mr-2" type="text" placeholder="Buscar" aria-label="Buscar" style="width: 400px; height: 40px; margin-right: 10px;">
            <a href="#" class="btn btn-primary" style="height: 40px; background-color: #00FF00; color:#000000">Buscar</a>
        </form>
        <div>
            @php
                $carrito = session()->get('cart', []);
            @endphp

            @if(Auth::check())
                <a href="{{ route('dashboard') }}" style="color: #FFFFFF; text-decoration: none;">{{ Auth::user()->name }}</a>
                <a href="{{ route('user.logout') }}" style="color: #FFFFFF; text-decoration: none;">x</a>
            @else
                <a href="{{ route('login') }}" style="color: #FFFFFF; text-decoration: none;">Autenticación</a>
            @endif

            <a href="{{ route('cart.show', $carrito) }}" style="text-decoration: none;">
                <img src="{{ asset('ico/carrito.jpg') }}" style="width: 70px; height: 50px;">
            </a>

            @if(!$carrito)
            @else
                @if($carrito->iTotalItems > 0)
                    <span style="color:#FFFFFF; font-size: 20px;">{{ $carrito->iTotalItems }}</span>
                @endif
            @endif
        </div>
    </div>
</div>