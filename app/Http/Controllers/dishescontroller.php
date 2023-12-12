<?php

namespace App\Http\Controllers;
use App\Models\dishes;
use Illuminate\Http\Request;


class dishesController extends Controller
{
    /**
     * Display a listing of the dishes.
     */
    public function index()
    {
        $dish = dishes::all();
        return view('dish.index', compact('dish'));
    }

    /*
    * todo los platos
    */
    public function apiIndex()
    {
        $dish = dishes::all();
        return response()->json($dish);
    }

    //un solo plato
    public function apiEdit(dishes $dish)
    {
        return response()->json($dish);
    }


    public function apiUpdate(Request $request, dishes $dish)
    {
        
        $validatedData = $request->validate([
            'Nombre' => 'required|string',
            'Descripcion' => 'required|string',
            'Precio'=> 'required|numeric',
            'Activo'=> 'required|string',
            // Añade aquí otras validaciones según tus campos
        ]);

        $dish->update($validatedData);

        return response()->json(['message' => 'Plato actualizado con éxito', 'dish' => $dish]);
    }

    public function apiDelete( Dishes $dish)
    {
        $dish->delete();
        return response()->json(['message'=> 'Plato Eliminado','data'=> $dish]);
    }

    public function apiCreate(Request $request)
    {
         // Validar los datos del formulario
         $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:200',
            'Precio' => 'required|numeric',
            'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Subir la imagen y obtener su nombre
        $image = $request->file('Imagen');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Crear un nuevo plato en la base de datos
        dishes::create([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
            'Imagen' => $imageName,
            'Activo' => $request->input('Activo', 0), // Valor predeterminado a 0 si no se selecciona
        ]);

        return response()->json(['message'=> 'Plato creado Exitosamente']);
    }

    /**
     * Show the form for creating a new dish.
     */
    public function create()
    {
        return view('dish.create');
    }


    /**
     * Store a newly created dish in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:200',
            'Precio' => 'required|numeric',
            'Imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Subir la imagen y obtener su nombre
        $image = $request->file('Imagen');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Crear un nuevo plato en la base de datos
        dishes::create([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
            'Imagen' => $imageName,
            'Activo' => $request->input('Activo', 0), // Valor predeterminado a 0 si no se selecciona
        ]);

        return redirect()->route('dish.index')->with('success', 'Plato creado con éxito.');
    }
     /**
     * Display the specified dish.
     */
    public function show(dishes $dish)
    {
        return view('dish.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified dish.
     */
    public function edit(dishes $dish)
    {
        return view('dish.edit', compact('dish'));
    }

    /**
     * Update the specified dish in storage.
     */
    public function update(Request $request, dishes $dish)
    {
        $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:200',
            'Precio' => 'required|numeric',
        ]);

        $dish->update([
            'Nombre' => $request->input('Nombre'),
            'Descripcion' => $request->input('Descripcion'),
            'Precio' => $request->input('Precio'),
        ]);

                

        return redirect()->route('dish.index')->with('success', 'Plato actualizado con éxito.');
    }

    /**
     * Remove the specified dish from storage.
     */
    public function destroy(dishes $dish)
    {
        $dish->delete();
        return redirect()->route('dish.index')->with('success', 'Plato eliminado con éxito.');
    }


    /**
     * Show the form for uploading an image for a dish.
     */
    public function showImageUploadForm()
    {
        return view('dish.uploadImage');
    }

    /**
     * Handle image upload for a dish.
     */
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        return redirect()->back()->with('success', 'Imagen subida con éxito.');
    }
    public function activate(dishes $dish)
    {
        $dish->update(['Activo' => true]);
        return redirect()->route('dish.index')->with('success', 'Plato activado con éxito.');
    }
    
    public function deactivate(dishes $dish)
    {
        $dish->update(['Activo' => false]);
        return redirect()->route('dish.index')->with('success', 'Plato desactivado con éxito.');
    }
    public function setDishActive(dishes $dish)
    {
        $dish->setActive();
        return redirect()->route('dish.index')->with('success', 'Plato activado con éxito.');
    }
    
    public function setDishInactive(dishes $dish)
    {
        $dish->setInactive();
        return redirect()->route('dish.index')->with('success', 'Plato desactivado con éxito.');
    }
}