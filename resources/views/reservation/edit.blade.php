@extends('layouts.app')

@section('title', 'Editar Reservación')

@section('content')
    <header style="background-color: #000; color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px 0; text-align: center;">
        <h1 style="font-size: 24px;">Editar Reservación</h1>
    </header>

    <div class="container" style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <h1>Editar Reservación</h1>

        <!-- Manejo de errores -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reservation.update', $reservation->id) }}">
            @csrf
            @method('PUT') <!-- Usamos el método PUT para actualizar la reserva -->

            <div class="form-group">
                <label for="customer_id">Cliente:</label>
                <select name="customer_id" id="customer_id" class="form-control" required>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $customer->id == $reservation->customer_id ? 'selected' : '' }}>{{ $customer->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="FechaReserva">Fecha de Reserva:</label>
                <input type="date" name="FechaReserva" id="FechaReserva" class="form-control" value="{{ $reservation->FechaReserva }}" required>
            </div>

            <div class="form-group">
                <label for="NumeroPersonas">Número de Personas:</label>
                <input type="number" name="NumeroPersonas" id="NumeroPersonas" class="form-control" value="{{ $reservation->NumeroPersonas }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Reservación</button>
        </form>
    </div>
@endsection
