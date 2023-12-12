@extends('layouts.app')

@section('title', 'Editar Orden')

@section('content')
    <h1>Editar Orden #{{ $order->id }}</h1>

    <form method="POST" action="{{ route('orders.update', $order->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="customers_id">Cliente:</label>
            <select name="customers_id" id="customers_id">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $order->customers_id ? 'selected' : '' }}>
                        {{ $customer->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="NumeroPersonas">Número de Personas:</label>
            <input type="number" name="NumeroPersonas" id="NumeroPersonas" value="{{ $order->NumeroPersonas }}" required>
        </div>

        <div class="form-group">
            <label for="FechaOrden">Fecha de Orden:</label>
            <input type="date" name="FechaOrden" id="FechaOrden" value="{{ $order->FechaOrden }}" required>
        </div>

        <button type="submit">Actualizar Orden</button>
    </form>
@endsection
