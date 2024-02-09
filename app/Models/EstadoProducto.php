<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoProducto extends Model
{
    use HasFactory;
    protected $table = 'estado_productos';
    protected $fillable = ['nombre'];
    public function scopeBuscar($query, $buscar)
     {
         if ($buscar === '') {
             return;
         }
         return $query->where('nombre', 'like', '%' . $buscar . '%');
     }

     public function productos()
     {
         return $this->hasMany(Producto::class, 'id');
     }
}
