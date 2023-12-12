<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'orders';

    // Nombre de la columna que es la clave primaria
    protected $primaryKey = 'OrdenID';

    // Atributos que pueden ser asignados en masa (por ejemplo, al crear o actualizar registros)
    protected $fillable = [
        'customers_id',
        'NumeroPersonas',
        'FechaOrden',
    ];

    // Relación con la tabla 'customers'
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customers_id');
    }

}
