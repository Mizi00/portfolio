<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCompetence extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function recupRealisation()
    {
        return $this->belongsToMany(Realisation::class, 'detenirs', 'idSousCompetence', 'idRealisation');
    }
}
