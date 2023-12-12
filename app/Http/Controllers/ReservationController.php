<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\customer;
use App\Models\Mesa;


use Illuminate\Http\Request;

class ReservationController extends Controller
{
   // Muestra una lista de todas las reservaciones
   public function index()
   {
       $reservations = Reservation::all();
       return view('reservation.index', compact('reservations'));
   }

 // Muestra el formulario para crear una nueva reservación
 public function create()
 {
  $customers = Customer::all(); // Reemplaza 'Customer' con el modelo de cliente que estés utilizando
  return view('reservation.create', compact('customers'));
 }

 // Almacena una nueva reservación en la base de datos
 public function store(Request $request)
 {
      // Validar y guardar la nueva reserva en la base de datos
      $request->validate([
         'customer_id' => 'required|integer', 
         'FechaReserva' => 'required|date',  
         'NumeroPersonas' => 'required|integer', 
         'mesa_id' =>'required|integer', 
     ]);

     Reservation::create([
          'customer_id' => $request->input('customer_id'),
         'FechaReserva' => $request->input('FechaReserva'),
         'NumeroPersonas' => $request->input('NumeroPersonas'),
         'mesa_id' => $request->input('mesa_id'), 
         'Activo' => $request->input('Activo', 0), // Valor predeterminado a 0 si no se selecciona
     ]);

     return redirect()->route('reservation.index')->with('success', 'Reservación creada con éxito.');
 }

 // Muestra los detalles de una reservación específica
 public function show(Reservation $reservation)
 {
  return view('reservation.show', compact('reservation'));
 }

 // Muestra el formulario para editar una reservación existente
 public function edit(Reservation $reservation)
 {
   $customers = Customer::all(); 
    return view('reservation.edit', compact('reservation', 'customers'));
 }

 // Actualiza una reservación en la base de datos
 public function update(Request $request, Reservation $reservation)
 {
     $request->validate([
         'customer_id' => 'required|integer',
         'fecha_reserva' => 'required|date',
         'NumeroPersonas' => 'required|integer',
     ]);

     $reservation->update([
      'customer_id' => $request->input('customer_id'),
         'FechaReserva' => $request->input('FechaReserva'),
         'NumeroPersonas' => $request->input('NumeroPersonas'),
     ]);

     return redirect()->route('reservation.index')->with('success', 'Reservación actualizada con éxito.');
 }

 // Elimina una reservación de la base de datos
 public function destroy(Reservation $reservation)
 {
     $reservation->delete();
     return redirect()->route('reservation.index')->with('success', 'Reservación eliminada con éxito.');
 }
    public function activate(Reservation $reservation)
         {
            $reservation->update(['Activo' => true]);
            return redirect()->route('reservation.index')->with('success', 'Plato activado con éxito.');
        }
        
        public function deactivate(Reservation $reservation)
        {
            $reservation->update(['Activo' => false]);
            return redirect()->route('reservation.index')->with('success', 'Plato desactivado con éxito.');
        }
        public function setDishActive(Reservation $reservation)
        {
            $reservation->setActive();
            return redirect()->route('reservation.index')->with('success', 'mesa activado con éxito.');
        }
        
        public function setDishInactive(Reservation $reservation)
        {
            $reservation->setInactive();
            return redirect()->route('reservation.index')->with('success', 'mesa desactivado con éxito.');
        }
}
