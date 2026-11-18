<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class estudiantes_model extends Model
{
    use HasFactory;
    protected $table = 'estudiante';

    protected $fillable = [
        'carnet',
        'nombres',
        'apellidos',
        'email',
        'fecha_nacimiento',
        'carrera_id',
    ];

    public function carrera():BelongsTo{
        return $this->belongsTo(carrera_model::class);
    }
}
