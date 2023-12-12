@extends('layouts.app')

@section('title', 'Crear Nueva Orden')

@section('content')
    <header style="background-color: #000; color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); padding: 10px 0; text-align: center;">
        <h1 style="font-size: 24px;">Crear Nueva Orden</h1>
    </header>

    <main style="max-width: 400px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <section>
            <h1 style="text-align: center; margin-bottom: 20px;">Crear Nueva Orden</h1>

            <form method="POST" action="{{ route('orders.store') }}" style="margin-top: 20px;">
                @csrf

                <div style="margin-bottom: 20px;">
                    <label for="customers_id" style="display: block;">Cliente:</label>
                    <select name="customers_id" id="customers_id" required style="width: 100%; padding: 5px;">
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="NumeroPersonas" style="display: block;">Número de Personas:</label>
                    <input type="number" name="NumeroPersonas" id="NumeroPersonas" required style="width: 100%; padding: 5px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="FechaOrden" style="display: block;">Fecha de Orden:</label>
                    <input type="date" name="FechaOrden" id="FechaOrden" required style="width: 100%; padding: 5px;">
                </div>

                <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px; cursor: pointer; width: 100%;">Crear Orden</button>
            </form>
        </section>
    </main>
@endsection
