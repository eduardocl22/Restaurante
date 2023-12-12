@extends('layouts.app')

@section('title', 'Detalles de Reservación')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #000;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }
        header h1 {
            font-size: 24px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
        }
    </style>

    <header>
        <h1>Detalles de Reservación</h1>
    </header>

    <div class="container">
        <h1>Detalles de Reservación</h1>

        <div class="details">
            <h2>ID de Reserva: {{ $reservation->id }}</h2>
            <p><strong>Cliente:</strong> {{ $reservation->customer->nombre }}</p>
            <p><strong>Fecha de Reserva:</strong> {{ $reservation->FechaReserva }}</p>
            <p><strong>Número de Personas:</strong> {{ $reservation->NumeroPersonas }}</p>
            <p><strong>Estado:</strong> {{ $reservation->estado }}</p>

            <!-- Agrega más detalles de la reserva si es necesario -->

            <a href="{{ route('reservation.index') }}" class="btn btn-primary">Volver a la lista</a>
        </div>
    </div>
@endsection
