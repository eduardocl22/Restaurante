<!-- resources/views/list-invoice-details.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Detalles de Factura')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Lista de Detalles de Factura</h1>

        <a href="{{ route('invoiceDetails.create') }}" style="display: block; margin-bottom: 10px; text-decoration: none; color: #3498db; font-weight: bold; border: 1px solid #3498db; padding: 8px 16px; border-radius: 4px; transition: background-color 0.3s, color 0.3s;">Crear Nuevo Detalle de Factura</a>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px; padding: 10px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: #4CAF50; color: white;">
                    <th style="padding: 12px;"><a href="{{ route('invoiceDetails.index', ['sort' => 'OrderID']) }}">Order ID</a></th>
                    <th style="padding: 12px;"><a href="{{ route('invoiceDetails.index', ['sort' => 'PlatoID']) }}">Plato ID</a></th>
                    <th style="padding: 12px;"><a href="{{ route('invoiceDetails.index', ['sort' => 'Cantidad']) }}">Cantidad</a></th>
                    <th style="padding: 12px;"><a href="{{ route('invoiceDetails.index', ['sort' => 'PrecioUnitario']) }}">Precio Unitario</a></th>
                    <th style="padding: 12px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoiceDetail as $invoiceDetail)
                    <tr>
                        <td style="padding: 8px;">{{ $invoiceDetail->OrderID }}</td>
                        <td style="padding: 8px;">{{ $invoiceDetail->PlatoID }}</td>
                        <td style="padding: 8px;">{{ $invoiceDetail->Cantidad }}</td>
                        <td style="padding: 8px;">{{ $invoiceDetail->PrecioUnitario }}</td>
                        <td style="padding: 8px;">
                            <a href="{{ route('invoiceDetails.show', $invoiceDetail->id) }}" style="background-color: green; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Detalles</a>
                            <a href="{{ route('invoiceDetails.edit', $invoiceDetail->id) }}" style="background-color: blue color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">Editar</a>
                            <form method="POST" action="{{ route('invoiceDetails.destroy', $invoiceDetail->id) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: #d9534f; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer; margin-right: 10px;">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
