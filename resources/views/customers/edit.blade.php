<!-- resources/views/edit-customer.blade.php -->

@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
    <h1 style="text-align: center;">Editar Cliente</h1>

    <form method="POST" action="{{ route('customers.update', $customer->id) }}" style="background-color: #fff; padding: 20px; border: 1px solid #ccc; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">

        @csrf
        @method('PUT')

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" value="{{ $customer->Nombre }}" required>
        </div>

        <div>
            <label for="Telefono">Teléfono:</label>
            <input type="text" name="Telefono" id="Telefono" value="{{ $customer->Telefono }}" required>
        </div>

        <div>
            <label for="Email">Email:</label>
            <input type="email" name="Email" id="Email" value="{{ $customer->Email }}" required>
        </div>

        <div>
            <label for="FechaRegistro">Fecha de Registro:</label>
            <input type="date" name="FechaRegistro" id="FechaRegistro" value="{{ $customer->FechaRegistro }}" required>
        </div>

        <button type="submit" style="background-color: #007bff; color: #fff; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Actualizar Cliente</button>
    </form>

    <a href="{{ route('customers.index') }}" style="display: block; text-align: center; margin-top: 10px; color: #007bff; text-decoration: none;">Volver a la Lista de Clientes</a>
@endsection
