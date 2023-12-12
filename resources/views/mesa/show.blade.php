@extends('layouts.app')

@section('title', 'Detalles de la Mesa')

@section('content')
    <div class="container">
        <h1 style="text-align: center;">Detalles de la Mesa</h1>

        <p><strong>ID:</strong> {{ $mesa->id }}</p>
        <p><strong>Capacidad:</strong> {{ $mesa->capacidad }}</p>
        <p><strong>Ubicación:</strong> {{ $mesa->ubicacion }}</p>

        <a href="{{ route('mesa.index') }}" style="display: block; margin-top: 10px; text-decoration: none; color: #007BFF;">Volver al Listado</a>
    </div>
@endsection
