<!-- resources/views/dish-details.blade.php -->

@extends('layouts.app')

@section('title', 'Detalles del Plato')

@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="text-align: center; margin-bottom: 20px;">Detalles del Plato</h1>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <th style="width: 30%;">Nombre:</th>
                <td>{{ $dish->Nombre }}</td>
            </tr>
            <tr>
                <th>Descripción:</th>
                <td>{{ $dish->Descripcion }}</td>
            </tr>
            <tr>
                <th>Precio:</th>
                <td>{{ $dish->Precio }}</td>
            </tr>
            <tr>
                <th>Estado Activo:</th>
                <td>{{ $dish->Activo ? 'Activo' : 'Inactivo' }}</td>
            </tr>
            <tr>
                <th>Imagen:</th>
                <td>
                    @if ($dish->Imagen)
                        <img src="{{ asset('images/' . $dish->Imagen) }}" alt="{{ $dish->Nombre }}" style="max-width: 300px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
                    @else
                        <p>No hay imagen disponible.</p>
                    @endif
                </td>
            </tr>
        </table>

        <a href="{{ route('dish.edit', $dish->id) }}" style="display: inline-block; text-decoration: none; background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px;">Editar Plato</a>
        <a href="{{ route('dish.index') }}" style="display: inline-block; text-decoration: none; color: #3498db; border: 1px solid #3498db; padding: 10px 20px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Volver a la Lista de Platos</a>
    </div>
@endsection
