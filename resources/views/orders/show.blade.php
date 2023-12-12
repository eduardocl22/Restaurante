@extends('layouts.app')

@section('title', 'Detalles de la Orden')

@section('content')
    <header style="background-color: #000; color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px 0; text-align: center;">
        <h1 style="font-size: 24px;">Detalles de la Orden</h1>
    </header>

    <div class="container" style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1>Detalles de la Orden #{{ $order->id }}</h1>

        <p><strong>Cliente:</strong> {{ $order->customer->nombre }}</p>
        <p><strong>Número de Personas:</strong> {{ $order->NumeroPersonas }}</p>
        <p><strong>Fecha de Orden:</strong> {{ $order->FechaOrden }}</p>

        <a href="{{ route('orders.index') }}" class="btn btn-primary">Volver al Listado</a>
    </div>
@endsection
