<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTable extends Model
{
    use HasFactory;

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function tableTecnico() 
    {
        return $this->hasOne(TableTecnico::class);
    }

    public function tableTipoAgenteExtintor() 
    {
        return $this->hasOne(TableTipoAgenteExtintor::class);
    }
}
