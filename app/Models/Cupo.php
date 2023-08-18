<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupo extends Model
{
    use HasFactory;

    protected $table ='cupos';
    protected $primaryKey = 'id';
    protected $fillable = ['carrera_id', 'cupos', 'reservados', 'inscriptos'];

    public $timestamps = false;

    public function carrera() {
        return $this->belongsTo(Carrera::class, 'carrera_id', 'id');
    }
}
