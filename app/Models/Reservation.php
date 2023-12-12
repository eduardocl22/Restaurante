<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $primaryKey = 'id';
    protected $fillable = ['customers_id', 'FechaReserva', 'NumeroPersonas','mesa_id','Activo'];
    
    public function cambiarEstadoBasadoEnCondicion()
    {
        // Verifica alguna condición, por ejemplo, si una mesa ha alcanzado cierta cantidad en existencia
        if ($this->cantidad_en_existencia <= 0) {
            // Establece la mesa  en estado inactivo
            $this->setInactive();
        } else {
            // Establece la mesa en estado activo
            $this->setActive();
        }

        // Guarda los cambios en la base de datos
        $this->save();
    }

    // Define una relación con la tabla 'customers'
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }

}
