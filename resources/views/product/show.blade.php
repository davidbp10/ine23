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
            <p class="mb-2">Precio: ${{ $product->price }}</p>
            <p class="mb-2">Fecha de creación: {{ $product->created_at }}</p>
            <button class="btn btn-primary">Comprar</button>
        </div>
    </div>
</div>
@endsection
