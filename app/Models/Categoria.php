<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = ['nombre'];


    public function scopeBuscar($query, $buscar)
     {
         if ($buscar === '') {
             return;
         }
         return $query->where('nombre', 'like', '%' . $buscar . '%');
     }
}
