<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function addDataTable()
    {
        return view('user.homePage.dataTable.add-dataTable');
    }

    public function infoTecnico()
    {
        return view('user.homePage.dataTable.info-tecnico');
    }
    
    public function infoTipoAgenteExtintor()
    {
        return view('user.homePage.dataTable.info-tipo-agente-extintor');
    }
}
