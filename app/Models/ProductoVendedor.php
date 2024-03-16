<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVendedor extends Model

    {
        use HasFactory;

        protected $table = 'productos';
        protected $fillable = ['nombre',
        'sku',
        'descripcion',
        'categorias_id',
        'subcategorias_id',
        'estado_productos_id',
        'marcas_id',
        'estado_publicaciones_id',
        'precio',
        'foto1',
        'foto2',
        'foto3',
        'foto4',
        'foto5',
        'users_id',
        'regiones_id',
        'comunas_id',
        'tallas_id',
        'material_id',
        'alto',
        'ancho',
        'profundidad',
        'peso',
        'tiempouso_id',
    ];


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


