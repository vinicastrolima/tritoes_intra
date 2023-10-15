<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'treino_id',
        'votos_sim',
        'votos_nao',
        'data_limite_mudanca',
    ];

    protected $dates = ['data_limite_mudanca'];

    public function treino()
    {
        return $this->belongsTo(Training::class, 'treino_id');
    }

    // Restante do código do modelo...
}
