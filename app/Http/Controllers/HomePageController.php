<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataTable;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage()
    {
        // $data = DataTable::get();
        $data = DataTable::all();

        // return $data;
        return view('user.homePage.dataTable.dataTable', compact('data'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('getLogin')->with('success', 'You have been successfully logged out');
    }
    
    public function addDataTable()
    {
        $user = User::all();
        // return $user;
        return view('user.homePage.dataTable.add-dataTable', compact('user'));
    }

    public function saveDataTable(Request $request)
    {
        $request->validate([
            'nome_comercial' => 'required',
            'nome_cliente' => 'required',
            'data_servico' => 'required',
            'viatura_ou_loja' => 'required',
            'observacao' => 'required',
            'nr_interno' => 'required',
            'nr_serie' => 'required',
            'capacidade_kg' => 'required',
            'persao_permanente' => 'required',
            'nome_fabricante' => 'required',
            'ano_fabrico' => 'required',
            'marcacao_CE' => 'required',
            'localizacao' => 'required',
            'data_ultimo_carregamento' => 'required',
            'data_ultima_prova_hidraulica' => 'required',
            'manutencao_MNT' => 'required',
            'carregamento_MNT_AD' => 'required',
            'tipo' => 'required',
            'peso_CO2_kg' => 'required',
            'prova_hidraulica' => 'required',
            'selo_seguranca' => 'required',
            'O_Ring' => 'required',
            'cavilha' => 'required',
            'manometro' => 'required',
            'difusor' => 'required',
            'base_plastica' => 'required',
            'rotulo' => 'required',
            'sparklets_CO2' => 'required',
            'aprovado' => 'required',
            'serv_carga' => 'required',
            'extintor_novo' => 'required',
            'motivo_rejeitado' => 'required',
        ]);

        // dd($request->all());

        $data_table_column = DataTable::findOrFail($request->user_id);

        return $data_table_column;
        $data_table_column->dataTables()->create([
            'nome_comercial' => $request->nome_comercial,
            // 'nome_cliente' => strip_tags($request->input('nome_cliente')),
            'nome_cliente' => $request->nome_cliente,
            'data_servico' => $request->data_servico,
            'viatura_ou_loja' => $request->viatura_ou_loja,
            'observacao' => $request->observacao,
            'nr_interno' => $request->nr_interno,
            'nr_serie' => $request->nr_serie,
            'capacidade_kg' => $request->capacidade_kg,
            'persao_permanente' => $request->persao_permanente,
            'nome_fabricante' => $request->nome_fabricante,
            'ano_fabrico' => $request->ano_fabrico,
            'marcacao_CE' => $request->marcacao_CE,
            'localizacao' => $request->localizacao,
            'data_ultimo_carregamento' => $request->data_ultimo_carregamento,
            'data_ultima_prova_hidraulica' => $request->data_ultima_prova_hidraulica,
            'manutencao_MNT' => $request->manutencao_MNT,
            'carregamento_MNT_AD' => $request->carregamento_MNT_AD,
            'tipo' => $request->tipo,
            'peso_CO2_kg' => $request->peso_CO2_kg,
            'prova_hidraulica' => $request->prova_hidraulica,
            'selo_seguranca' => $request->selo_seguranca,
            'O_Ring' => $request->O_Ring,
            'cavilha' => $request->cavilha,
            'manometro' => $request->manometro,
            'difusor' => $request->difusor,
            'base_plastica' => $request->base_plastica,
            'rotulo' => $request->rotulo,
            'sparklets_CO2' => $request->sparklets_CO2,
            'aprovado' => $request->aprovado,
            'serv_carga' => $request->serv_carga,
            'extintor_novo' => $request->extintor_novo,
            'motivo_rejeitado' => $request->motivo_rejeitado,
        ]);

        // dd($data_table_column);

        // return $data_table_column;

        // $nome_comercial = $request->nome_comercial;
        // $nome_cliente = $request->nome_cliente;
        // $data_servico = $request->data_servico;
        // $viatura_ou_loja = $request->viatura_ou_loja;
        // $observacao = $request->observacao;
        // $nr_interno = $request->nr_interno;
        // $nr_serie = $request->nr_serie;
        // $capacidade_kg = $request->capacidade_kg;
        // $persao_permanente = $request->persao_permanente;
        // $nome_fabricante = $request->nome_fabricante;
        // $ano_fabrico = $request->ano_fabrico;
        // $marcacao_CE = $request->marcacao_CE;
        // $localizacao = $request->localizacao;
        // $data_ultimo_carregamento = $request->data_ultimo_carregamento;
        // $data_ultima_prova_hidraulica = $request->data_ultima_prova_hidraulica;
        // $manutencao_MNT = $request->manutencao_MNT;
        // $carregamento_MNT_AD = $request->carregamento_MNT_AD;
        // $tipo = $request->tipo;
        // $peso_CO2_kg = $request->peso_CO2_kg;
        // $prova_hidraulica = $request->prova_hidraulica;
        // $selo_seguranca = $request->selo_seguranca;
        // $O_Ring = $request->O_Ring;
        // $cavilha = $request->cavilha;
        // $manometro = $request->manometro;
        // $difusor = $request->difusor;
        // $base_plastica = $request->base_plastica;
        // $rotulo = $request->rotulo;
        // $sparklets_CO2 = $request->sparklets_CO2;
        // $aprovado = $request->aprovado;
        // $serv_carga = $request->serv_carga;
        // $extintor_novo = $request->extintor_novo;
        // $motivo_rejeitado = $request->motivo_rejeitado;

        // $assis = new DataTable();
        // $assis->nome_comercial = $nome_comercial;
        // $assis->nome_cliente = $nome_cliente;
        // $assis->data_servico = $data_servico;
        // $assis->viatura_ou_loja = $viatura_ou_loja;
        // $assis->observacao = $observacao;
        // $assis->nr_interno = $nr_interno;
        // $assis->nr_serie = $nr_serie;
        // $assis->capacidade_kg = $capacidade_kg;
        // $assis->persao_permanente = $persao_permanente;
        // $assis->nome_fabricante = $nome_fabricante;
        // $assis->ano_fabrico = $ano_fabrico;
        // $assis->marcacao_CE = $marcacao_CE;
        // $assis->localizacao = $localizacao;
        // $assis->data_ultimo_carregamento = $data_ultimo_carregamento;
        // $assis->data_ultima_prova_hidraulica = $data_ultima_prova_hidraulica;
        // $assis->manutencao_MNT = $manutencao_MNT;
        // $assis->carregamento_MNT_AD = $carregamento_MNT_AD;
        // $assis->tipo = $tipo;
        // $assis->peso_CO2_kg = $peso_CO2_kg;
        // $assis->prova_hidraulica = $prova_hidraulica;
        // $assis->selo_seguranca = $selo_seguranca;
        // $assis->O_Ring = $O_Ring;
        // $assis->cavilha = $cavilha;
        // $assis->manometro = $manometro;
        // $assis->difusor = $difusor;
        // $assis->base_plastica = $base_plastica;
        // $assis->rotulo = $rotulo;
        // $assis->sparklets_CO2 = $sparklets_CO2;
        // $assis->aprovado = $aprovado;
        // $assis->serv_carga = $serv_carga;
        // $assis->extintor_novo = $extintor_novo;
        // $assis->motivo_rejeitado = $motivo_rejeitado;
        // $assis->save();

        // return redirect()->route('homePage')->with('success', 'Assistencia Added Successfully');
        //return redirect('/user/homePage')->with('success', 'Assistencia Added Successfully');
        //return redirect()->back(); -> retorna para o add-dataTable
    }
}
