@extends('templates.master')

@section('content-center')
<div class="container my-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset($product->imgUrl) }}" alt="{{ $product->name }}" class="img-fluid rounded" style="border: 2px solid #ccc;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="display-4 mb-4">{{ $product->name }}</h1>
                    <p class="lead mb-4">{{ $product->description }}</p>
                    <p class="mb-2">Empresa: {{ $product->company->name }}</p>
                    
                    @if (!$product->hasDiscount())
                        <p class="h4 mb-4">Precio: {{ $product->price }}€</p>
                    @else
                        <p class="h4 mb-2">Precio: <span class="text-danger">{{ number_format($product->price * (1 - $product->discountPercent), 2, '.', '') }}€</span></p>
                        <p><s>{{ $product->price }}</s> - {{ $product->discountPercent * 100 }}% de descuento</p>
                    @endif

                    <p class="mb-2">Fecha de creación: {{ $product->created_at->format('d/m/Y') }}</p>
                    
                    <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Añadir al carro</a>

                    @if (session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection