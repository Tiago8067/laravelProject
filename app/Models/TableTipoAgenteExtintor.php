<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableTipoAgenteExtintor extends Model
{
    use HasFactory;

    protected $table = 'table_tipo_agente_extintors';
    
    protected $fillable = [
        'data_table_id',
        'nome',
    ];
}
