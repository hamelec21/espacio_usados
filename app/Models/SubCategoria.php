<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;
    protected $table = 'subcategorias';
    protected $fillable = ['nombre','categorias_id'];

    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('nombre', 'like', '%' . $buscar . '%');
    }

    //relaciones

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id', 'id');
    }
}
