<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status_usuario extends Model
{
    use HasFactory;
    protected $table = 'estado_usuarios';

//relaciones

public function usuarios()
     {
        return $this->hasMany(User::class, 'id');
     }

}
