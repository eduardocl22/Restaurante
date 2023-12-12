<!-- resources/views/create-customer.blade.php -->

@extends('layouts.app')

@section('title', 'Crear Cliente')

@section('content')
    <div style="max-width: 400px; margin: 0 auto;">
        <h1 style="text-align: center; margin-bottom: 20px;">Crear Cliente</h1>

        <form method="POST" action="{{ route('customers.store') }}" style="background-color: #fff; padding: 20px; border: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

            @csrf

            <div style="margin-bottom: 15px;">
                <label for="Nombre" style="display: block; margin-bottom: 8px;">Nombre:</label>
                <input type="text" name="Nombre" id="Nombre" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Telefono" style="display: block; margin-bottom: 8px;">Teléfono:</label>
                <input type="text" name="Telefono" id="Telefono" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="Email" style="display: block; margin-bottom: 8px;">Email:</label>
                <input type="email" name="Email" id="Email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="FechaRegistro" style="display: block; margin-bottom: 8px;">Fecha de Registro:</label>
                <input type="date" name="FechaRegistro" id="FechaRegistro" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;" required>
            </div>

            <button type="submit" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; display: block; width: 100%;">Guardar Cliente</button>
        </form>

        <a href="{{ route('customers.index') }}" style="display: block; text-align: center; margin-top: 10px; color: #3498db; text-decoration: none;">Volver a la Lista de Clientes</a>
    </div>
@endsection
