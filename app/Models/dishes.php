<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dishes extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'dishes';

    // Atributos que pueden ser asignados en masa (mass-assignable attributes)
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Imagen', 'Activo'];

    // Definir un metodo para acceder a la URL de la imagen
    public function getImageUrl()
    {
        // Verifica si la imagen está definida
        if ($this->Imagen) {
            return asset('storage/' . $this->Imagen);
        }

        // Si no hay imagen, puedes proporcionar una imagen predeterminada o una URL de marcador de posición
        return asset('storage/default.jpg');
    }
    public function cambiarEstadoBasadoEnCondicion()
    {
        // Verifica alguna condición, por ejemplo, si un plato ha alcanzado cierta cantidad en existencia
        if ($this->cantidad_en_existencia <= 0) {
            // Establece el plato en estado inactivo
            $this->setInactive();
        } else {
            // Establece el plato en estado activo
            $this->setActive();
        }

        // Guarda los cambios en la base de datos
        $this->save();
    }


    // Define una relación con la tabla 'invoiceDetails'
    public function invoiceDetails()
    {
        return $this->hasMany(InvoiceDetail::class, 'PlatoID', 'id');
    }

}
