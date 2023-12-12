<!-- resources/views/customer-info.blade.php -->

@extends('layouts.app')

@section('title', 'Información del Cliente')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Información del Cliente</h1>

        <div style="background-color: #fff; padding: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <p><strong>Nombre:</strong> {{ $customer->Nombre }}</p>
            <p><strong>Teléfono:</strong> {{ $customer->Telefono }}</p>
            <p><strong>Email:</strong> {{ $customer->Email }}</p>
            <p><strong>Fecha de Registro:</strong> {{ $customer->FechaRegistro }}</p>
        </div>
        
        <a href="{{ route('customers.index') }}" style="display: block; text-align: center; margin-top: 20px; background-color: #007bff; color: #fff; padding: 10px 20px; text-decoration: none;">Volver a la Lista de Clientes</a>
    </div>
@endsection
