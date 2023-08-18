<?php

namespace App\DTOs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sede;
use App\Models\Carrera;
use App\Models\Materia;

class ProgramasPendientesDTO extends Model
{
    public Sede[] $sedes;
    
}