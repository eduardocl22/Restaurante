<?php



namespace App\Http\Controllers;

use App\Models\InvoiceDetail;
use App\Models\order;
use App\Models\dishes;
use Illuminate\Http\Request;

class InvoiceDetailsController extends Controller
{
    /**
     * Display a listing of the invoice details.
     */
    public function index()
    {
        $invoiceDetail = InvoiceDetail::all();
        return view('invoiceDetails.index', compact('invoiceDetail'));
    }

    /**
     * Show the form for creating a new invoice detail.
     */
    public function create()
    {
        $dish = dishes::all();
        $orders = order::all();
        return view('invoiceDetails.create' , compact('dish', 'orders'));
    }

    /**
     * Store a newly created invoice detail in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'OrdenID' => 'required|integer',
            'PlatoID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
        ]);

       
       
        InvoiceDetail::create($request->all());

    

        // Redirigimos a la vista de lista de detalles de factura con un mensaje de éxito
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura creado con éxito.');
    }
    

    /**
     * Display the specified invoice detail.
     */
    public function show(InvoiceDetail $invoiceDetail)
    {
        return view('invoiceDetails.show', compact('invoiceDetail'));
    }

    /**
     * Show the form for editing the specified invoice detail.
     */
    public function edit(InvoiceDetail $invoiceDetail)
    {
        return view('invoiceDetails.edit', compact('invoiceDetail'));
    }

    /**
     * Update the specified invoice detail in storage.
     */
    public function update(Request $request, InvoiceDetail $invoiceDetail)
    {
        // Validar y actualizar los datos del detalle de factura
        $request->validate([
            'OrderID' => 'required|integer',
            'PlatoID' => 'required|integer',
            'Cantidad' => 'required|integer',
            'PrecioUnitario' => 'required|numeric',
        ]);

        $invoiceDetail->update([
            'OrderID' => $request->input('OrderID'),
            'PlatoID' => $request->input('PlatoID'),
            'Cantidad' => $request->input('Cantidad'),
            'PrecioUnitario' => $request->input('PrecioUnitario'),
        ]);

        // Redirigir a la página de lista de detalles de factura
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura actualizado con éxito.');
    }

    /**
     * Remove the specified invoice detail from storage.
     */
    public function destroy(InvoiceDetail $invoiceDetail)
    {
        // Eliminar el detalle de factura de la base de datos
        $invoiceDetail->delete();

        // Redirigir a la página de lista de detalles de factura
        return redirect()->route('invoiceDetails.index')->with('success', 'Detalle de factura eliminado con éxito.');
    }
}