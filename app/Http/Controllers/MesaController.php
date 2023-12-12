<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las mesas
        $mesas = Mesa::all();
        return view('mesa.index', compact('mesas'));
    }

  
    public function create()
    {
        // Mostrar un formulario para crear una nueva mesa
        return view('mesa.create');
    }

  
    public function store(Request $request)
    {
        // Validar los datos del formulario
         $request->validate([
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:100',
        ]);

        // Crear una nueva mesa en la base de datos
        Mesa::create([
            'capacidad' => $request->input('capacidad'),
            'ubicacion' => $request->input('ubicacion'),
            
        ]);

        // Redirigir a alguna página después de crear la orden (por ejemplo, la lista de órdenes)
        return redirect()->route('mesa.index')->with('success', 'mesa creada con éxito.');
    }

   
    public function show(Mesa $mesas)
    {
        // Mostrar la información de una mesa específica
        return view('mesa.show', compact('mesas'));
    }

   
    public function edit(Mesa $mesas)
    {
        // Mostrar un formulario para editar la mesa
        return view('mesas.edit', compact('mesas'));
    }

    
    public function update(Request $request, Mesa $mesas)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'capacidad' => 'required|integer',
            'ubicacion' => 'required|string|max:100',
        ]);

        // Actualizar la mesa en la base de datos
        $mesas->update($validatedData);

        // Redireccionar a la lista de mesas u otra página
        return redirect('/mesa');
    }

  
    public function destroy(Mesa $mesas)
    {
        // Eliminar una mesa específica
        $mesas->delete();

        // Redireccionar a la lista de mesas u otra página
        return redirect('/mesa');
    }
}