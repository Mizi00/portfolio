<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function souscompetences()
    {
        return $this->hasMany(SousCompetence::class, 'idCompetence', 'id');
    }
}
