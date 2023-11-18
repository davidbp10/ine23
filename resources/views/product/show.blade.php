@extends('templates.master')

@section('content-center')
<div class="card card-body">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset($product->imgUrl) }}" alt="{{ $product->name }}" class="img-fluid" style="border: 2px solid #ccc; border-radius: 5px;">
        </div>
        <div class="col-md-6">
            <h1 class="mb-4">{{ $product->name }}</h1>
            <p class="mb-4">Descripción: {{ $product->description }}</p>
            <p class="mb-2">Empresa: {{ $product->company->name }}</p>
            
            @if (!$product->HasDiscount())
                <p>Precio: {{ $product->price }}€</p>
            @else
                <p>Precio: {{ number_format($product->price * (1 - $product->discountPercent), 2, '.', '') }}€</p>
                <p><s>{{ $product->price }}</s> {{ $product->discountPercent * 100 }}% de descuento</p>
            @endif
            <p class="mb-2">Fecha de creación: {{ $product->created_at }}</p>
            <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary mb-2">Añadir al carro</a>
            @if (session('success'))
                <div class="alert alert-success">
            {{ session('success') }}
    </div>
@endif

        </div>
    </div>
</div>
@endsection
