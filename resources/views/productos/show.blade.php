@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion ?? 'N/A' }}</p>
            <p class="card-text"><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
            <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection