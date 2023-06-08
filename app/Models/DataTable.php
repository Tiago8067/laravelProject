<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTable extends Model
{
    use HasFactory;

    protected $table = 'data_tables';
    
    protected $fillable = [
        'user_id',        
        'nome_comercial',
        'nome_cliente',
        'data_servico',
        'viatura_ou_loja',
        'observacao',
        'nr_interno',
        'nr_serie',
        'capacidade_kg',
        'persao_permanente',
        'nome_fabricante',
        'ano_fabrico',
        'marcacao_CE',
        'localizacao',
        'data_ultimo_carregamento',
        'data_ultima_prova_hidraulica',
        'manutencao_MNT',
        'carregamento_MNT_AD',
        'tipo',
        'peso_CO2_kg',
        'prova_hidraulica',
        'selo_seguranca',
        'O_Ring',
        'cavilha',
        'manometro',
        'difusor',
        'base_plastica',
        'rotulo',
        'sparklets_CO2',
        'aprovado',
        'serv_carga',
        'extintor_novo',
        'motivo_rejeitado',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tableTecnico() 
    {
        return $this->hasOne(TableTecnico::class, 'data_table_id', 'id');
    }

    public function tableTipoAgenteExtintor() 
    {
        return $this->hasOne(TableTipoAgenteExtintor::class, 'data_table_id', 'id');
    }
}
