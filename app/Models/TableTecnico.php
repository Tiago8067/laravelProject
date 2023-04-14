<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableTecnico extends Model
{
    use HasFactory;

    protected $table = 'table_tecnicos';
    
    protected $fillable = [
        'data_table_id',
        'nome_tecnico',
        'email',
        'contacto',
        'idade',
        'genero',
    ];
}
