<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class customersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los clientes
        $customers = Customer::all();
        
        // Retornar una vista que muestre la lista de clientes
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar un formulario para crear un nuevo cliente
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:50',
            'Telefono' => 'required|string|max:15',
            'Email' => 'required|email|max:50',
            'FechaRegistro' => 'required|date',
           
        ]);

        // Crear un nuevo cliente en la base de datos
        Customer::create($validatedData);

        // Redireccionar a la lista de clientes u otra página
        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtener un cliente específico por su ID
        $customer = Customer::findOrFail($id);

        // Mostrar la información del cliente
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Obtener un cliente específico por su ID
        $customer = Customer::findOrFail($id);

        // Mostrar un formulario para editar el cliente
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:50',
            'Telefono' => 'required|string|max:15',
            'Email' => 'required|email|max:50',
            'FechaRegistro' => 'required|date',
        ]);

        // Actualizar el cliente en la base de datos
        Customer::where('id', $id)->update($validatedData);

        // Redireccionar a la lista de clientes u otra página
        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eliminar un cliente específico por su ID
        Customer::findOrFail($id)->delete();

        // Redireccionar a la lista de clientes u otra página
        return redirect('/customers');
    }
}
