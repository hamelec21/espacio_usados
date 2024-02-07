<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $table = 'modelos';
    protected $fillable = ['nombre','marcas_id'];
    public function scopeBuscar($query, $buscar)
     {
         if ($buscar === '') {
             return;
         }
         return $query->where('nombre', 'like', '%' . $buscar . '%');
     }

/**
 * *relaciones
 */

 public function modelos()
    {
        return $this->hasMany(Modelo::class,'id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marcas_id', 'id');
    }
}
