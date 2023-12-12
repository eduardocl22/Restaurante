<!-- resources/views/list-dish.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Platos')

@section('content')
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="text-align: center; margin-bottom: 20px;">Lista de Platos</h1>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 10px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('dish.create') }}" style="display: block; margin-bottom: 10px; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Crear Nuevo Plato</a>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: #4CAF50; color: white;">
                    <th style="padding: 12px;">Nombre</th>
                    <th style="padding: 12px;">Descripción</th>
                    <th style="padding: 12px;">Precio</th>
                    <th style="padding: 12px;">Estado Activo</th>
                    <th style="padding: 12px;">Imagen</th>
                    <th style="padding: 12px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dish as $d)
                    <tr>
                        <td style="padding: 8px;">{{ $d->Nombre }}</td>
                        <td style="padding: 8px;">{{ $d->Descripcion }}</td>
                        <td style="padding: 8px;">{{ $d->Precio }}</td>
                        <td style="padding: 8px;">{{ $d->Activo ? 'Activo' : 'Inactivo' }}</td>
                        <td style="padding: 8px;">
                            @if ($d->Imagen)
                                <img src="{{ asset('images/' . $d->Imagen) }}" alt="{{ $d->Nombre }}" style="max-width: 100px;">
                            @else
                                No hay imagen
                            @endif
                        </td>
                        <td style="padding: 8px;">
                            <a href="{{ route('dish.show', $d->id) }}" style="background-color: green; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Ver</a>
                            <a href="{{ route('dish.edit', $d->id) }}" style="background-color: blue color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Editar</a>
                             <form method="POST" action="{{ route('dish.destroy', $d->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: #d9534f; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; margin-right: 10px;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('dish.index') }}" style="display: inline-block; margin-top: 10px; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Volver a la Creación de Platos</a>
        <a href="javascript:history.go(-1)" style="display: inline-block; margin-top: 10px; margin-left: 10px; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Volver Atrás</a>
    </div>
@endsection
