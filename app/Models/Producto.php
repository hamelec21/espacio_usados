<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    public function scopeBuscar($query, $buscar)
     {
         if ($buscar === '') {
             return;
         }
         return $query->where('nombre', 'like', '%' . $buscar . '%');
     }


     public function scopeEstados($query1, $estados)
     {
         if ($estados === '') {
             return;
         }
         return $query1->where('estado_productos_id', 'like', '%' . $estados . '%');
     }


     public function scopeRegiones($query2, $regiones)
     {
         if ($regiones === '') {
             return;
         }
         return $query2->where('regiones_id', 'like', '%' . $regiones . '%');
     }

     public function scopeComunas($query3, $comunas)
     {
         if ($comunas === '') {
             return;
         }
         return $query3->where('comunas_id', 'like', '%' . $comunas . '%');
     }







     //relaciones

     public function estado_pos() //estado publicaciones
     {
         return $this->belongsTo(EstadoPublicacion::class, 'estado_publicaciones_id');
     }


     public function estado_producto() //estado publicaciones
     {
         return $this->belongsTo(EstadoProducto::class, 'estado_productos_id');
     }

}
