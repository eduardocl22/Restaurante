@extends('layouts.app')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            font-size: 24px;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: grid;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            background-color: #007bff;
            display: inline-block;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <div class="container">
        <h1>Create Invoice Detail</h1>

        <form action="{{ route('invoiceDetails.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="OrdenID">Order ID:</label>
                <input type="text" name="OrdenID" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="PlatoID">Dish ID:</label>
                <input type="text" name="PlatoID" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="Cantidad">Quantity:</label>
                <input type="number" name="Cantidad" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="PrecioUnitario">Unit Price:</label>
                <input type="text" name="PrecioUnitario" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
