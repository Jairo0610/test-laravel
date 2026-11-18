<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class carrera_model extends Model
{
    use HasFactory;
    protected $table = 'carreras';

    protected $fillable = [
        'nombre_carrera',
        'codigo',
    ];

    
    public function estudiantes():HasMany{
        return $this->hasMany(estudiantes_model::class);
    }
    
}
