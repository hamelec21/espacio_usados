<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    use HasFactory;
    protected $table = 'subcategorias';
    protected $fillable = ['nombre','categorias_id'];
}
