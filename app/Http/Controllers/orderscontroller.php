<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\customer;
use Illuminate\Http\Request;




class ordersController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        $orders = order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new order.
     */
    public function create()
    {   
        $customers = Customer::all();
       
        return view('orders.create', compact('customers'));
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
      // Validar los datos del formulario
      $request->validate([
        'customers_id' => 'required|integer', // Asegúrate de que este campo tenga reglas de validación adecuadas
        'NumeroPersonas' => 'required|integer',
        'FechaOrden' => 'required|date',
    ]);

    // Crear una nueva orden en la base de datos
    Order::create([
        'customers_id' => $request->input('customers_id'),
        'NumeroPersonas' => $request->input('NumeroPersonas'),
        'FechaOrden' => $request->input('FechaOrden'),
    ]);

    // Redirigir a alguna página después de crear la orden (por ejemplo, la lista de órdenes)
    return redirect()->route('orders.index')->with('success', 'Orden creada con éxito.');
}
    

    /**
     * Display the specified order.
     */
    public function show(order $order)
    {
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified order.
     */
    public function edit(order $order)
    {
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, order $order)
    {
        // Validar y actualizar los datos de la orden
        $request->validate([
            'customers_id' => 'required|integer',
            'NumeroPersonas' => 'required|integer',
            'FechaOrden' => 'required|date',
        ]);

        $order->update([
            'CustomerID' => $request->input('customers_id'),
            'NumeroPersonas' => $request->input('NumeroPersonas'),
            'FechaOrden' => $request->input('FechaOrden'),
        ]);

        // Redirigir a la página de lista de órdenes
        return redirect()->route('orders.index')->with('success', 'Orden actualizada con éxito.');
    }

    /**
     * Remove the specified order from storage.
     */
    public function destroy(order $order)
    {
        // Eliminar la orden de la base de datos
        $order->delete();

        // Redirigir a la página de lista de órdenes
        return redirect()->route('orders.index')->with('success', 'Orden eliminada con éxito.');
    }
}