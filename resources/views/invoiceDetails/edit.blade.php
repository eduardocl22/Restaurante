<!-- resources/views/edit-invoice-detail.blade.php -->

@extends('layouts.app')

@section('title', 'Editar Detalle de Factura')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-bottom: 20px;">Editar Detalle de Factura</h1>

        <form method="POST" action="{{ route('invoiceDetails.update', $invoiceDetail->id) }}" style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            @csrf
            @method('PUT')

            <div style="margin-top: 10px;">
                <label for="OrderID">Order ID:</label>
                <input type="number" name="OrderID" value="{{ $invoiceDetail->OrderID }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-top: 10px;">
                <label for="PlatoID">Plato ID:</label>
                <input type="number" name="PlatoID" value="{{ $invoiceDetail->PlatoID }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-top: 10px;">
                <label for="Cantidad">Cantidad:</label>
                <input type="number" name="Cantidad" value="{{ $invoiceDetail->Cantidad }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <div style="margin-top: 10px;">
                <label for="PrecioUnitario">Precio Unitario:</label>
                <input type="number" name="PrecioUnitario" step="0.01" value="{{ $invoiceDetail->PrecioUnitario }}" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
            </div>

            <button type="submit" style="background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 100%;">Actualizar</button>
        </form>
    </div>
@endsection
