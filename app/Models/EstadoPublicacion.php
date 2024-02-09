<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoPublicacion extends Model
{
    use HasFactory;
    protected $table = 'estado_publicaciones';
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
