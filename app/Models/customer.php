<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
     // Nombre de la tabla en la base de datos
     protected $table = 'customers';

     // Nombre de la columna que es la clave primaria
     protected $primaryKey = 'id';
 
     // Atributos que pueden ser asignados en masa 
     protected $fillable = ['Nombre', 'Telefono', 'Email', 'FechaRegistro'];
     
     
     
     public function orders() {
          return $this->hasMany(Order::class);
      }

}
