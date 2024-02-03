<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['name','guard_name'];

    public function scopeBuscar($query, $buscar)
    {
        if ($buscar === '') {
            return;
        }
        return $query->where('name', 'like', '%' . $buscar . '%');
    }
}
