<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    public function recupCompetence()
    {
        return $this->belongsToMany(Competence::class, 'avoirs', 'idRealisation', 'idCompetence')->withPivot('id');
    }

    public function recupSousCompetence()
    {
        return $this->belongsToMany(SousCompetence::class, 'detenirs', 'idRealisation', 'idSousCompetence')->withPivot('id');
    }
}
