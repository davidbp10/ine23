@extends('templates.master')

@section('content-center')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Carrito de Compras</h1>
            @if (session('cart'))
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><h4>Imagen</h4></th>
                            <th><h4>Título</h4></th>
                            <th><h4>Precio</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session('cart')->htItem as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset($item['imgUrl']) }}" alt="{{ $item['name'] }}" width="100">
                                </td>
                                <td><h5>{{ $item['name'] }}</h5></td>
                                @if (!$item['discount'])
                                    <h5>{{ $item['discount'] }}</h5>
                                    <td><h5>{{ $item['price'] }}€</h5></td>
                                @else
                                    <td><h5>{{ number_format($item['price'] * (1 - $item['discount']), 2, '.', '') }}€</h5></td>
                                @endif
                                <td>
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <a href="{{ route('cart.operate', ['operation' => 'add', 'product' => $item['id']]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-success">+</button>
                                        </a>
                                        <h5>{{ $item['quantity'] }}</h5>
                                        <a href="{{ route('cart.operate', ['operation' => 'remove', 'product' => $item['id']]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">-</button>
                                        </a>
                                        <div style="text-align: center;">
                                            <a href="{{ route('cart.operate', ['operation' => 'removeAll', 'product' => $item['id']]) }}" >
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Eliminar todo</button>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                      @endforeach
                  </tbody>
                </table>
                @if(session('cart')->iTotalItems < 1)
                    <h2>Total: $0</h2>
                @else
                    <h2>Total: ${{ session('cart')->dTotalPrice }}</h2>
                @endif
           @else
               <p>El carrito está vacío</p>
           @endif
       </div>
   </div>
</div>
@endsection
