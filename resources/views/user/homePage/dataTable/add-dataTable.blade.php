@extends('user.homepage.homepage')

@section('addDataTable')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Adicionar Assistencia</h3>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('saveDataTable') }}" method="post">
                        @csrf
                        
                        <div class=" card-body">
                            <div class="form-group">
                                <label for="nome_comercial">Nome do Comercial</label>
                                <input type="text" class="form-control" id="nome_comercial" name="nome_comercial"
                                    placeholder="Enter Nome do Comercial" value="{{ old('nome_comercial') }}">
                                @error('nome_comercial')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nome_cliente">Nome do Cliente</label>
                                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente"
                                    placeholder="Enter Nome do Cliente" value="{{ old('nome_cliente') }}">
                                @error('nome_cliente')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="data_servico">Data Serviço</label>
                                    <input type="date" class="form-control" id="data_servico" name="data_servico"
                                        placeholder="Enter Data Serviço" value="{{ old('data_servico') }}">
                                    @error('data_servico')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 50%; padding-left:1rem;">
                                    <label for="viatura_ou_loja">Executado em</label>
                                    <select class="custom-select form-control-border" id="viatura_ou_loja"
                                        name="viatura_ou_loja">
                                        <option selected></option>
                                        <option>Viatura</option>
                                        <option>Loja</option>
                                    </select>
                                    @error('viatura_ou_loja')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div style="flex: 50%; padding-right:1rem;">
                                    {{-- <div class="form-group d-flex flex-column">
                                        <label>Tecnico</label>
                                        <button type="button" class="btn border" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdropTecnico">
                                            Insira as Informações do Tecnico
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="staticBackdropTecnico" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropTecnico"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                @include('user.homePage.dataTable.info-tecnico')
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="observacao">Observação</label>
                                        <textarea type="text" class="form-control" id="observacao" name="observacao" placeholder="Enter Observação"
                                            value="{{ old('observacao') }}"></textarea>
                                        @error('observacao')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div style="flex: 50%; padding-right:1rem;">
                                    <div class="form-group">
                                        <label for="nr_interno">Nr Interno</label>
                                        <input type="number" class="form-control" id="nr_interno" name="nr_interno"
                                            placeholder="Enter Nr Interno" value="{{ old('nr_interno') }}">
                                        @error('nr_interno')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nr_serie">Nr Serie</label>
                                        <input type="text" class="form-control" id="nr_serie" name="nr_serie"
                                            placeholder="Enter Nr Serie" value="{{ old('nr_serie') }}">
                                        @error('nr_serie')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex;">
                                {{-- <div class="form-group d-flex flex-column" style="flex: 50%; padding-right:1rem;">
                                    <label>Agente</label>
                                    <button type="button" class="btn border" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        Insira o Tipo de Agente Extintor
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            @include('user.homePage.dataTable.info-tipo-agente-extintor')
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="capacidade_kg">Capacidade Kg</label>
                                    <input type="number" min="0" step="0.001" class="form-control"
                                        id="capacidade_kg" name="capacidade_kg" placeholder="Enter Capacidade Kg"
                                        value="{{ old('capacidade_kg') }}">
                                    @error('capacidade_kg')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="persao_permanente">Persão Permanente</label>
                                    <select class="custom-select form-control-border" id="persao_permanente"
                                        name="persao_permanente">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('persao_permanente')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nome_fabricante">Nome Fabricante</label>
                                <input type="text" class="form-control" id="nome_fabricante" name="nome_fabricante"
                                    placeholder="Enter Nome Fabricante" value="{{ old('nome_fabricante') }}">
                                @error('nome_fabricante')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="ano_fabrico">Ano Fabrico</label>
                                    <input type="number" min="1990" max="2023" class="form-control"
                                        id="ano_fabrico" name="ano_fabrico" placeholder="Enter Ano Fabrico"
                                        value="{{ old('ano_fabrico') }}">
                                    @error('ano_fabrico')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="marcacao_CE">Marcação CE</label>
                                    <select class="custom-select form-control-border" id="marcacao_CE"
                                        name="marcacao_CE">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('marcacao_CE')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="localizacao">Localização</label>
                                <input type="text" class="form-control" id="localizacao" name="localizacao"
                                    placeholder="Enter Localização" value="{{ old('localizacao') }}">
                                @error('localizacao')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="data_ultimo_carregamento">Data Ultimo Carregamento</label>
                                    <!--so poder inserir a data que não ultrapasse a do dia corrente, ou seja, a data da Assistencia-->
                                    <!--Resolver Problema de data so poder ser ate a atual-->
                                    <input type="date" max="2022-12-30" class="form-control"
                                        id="data_ultimo_carregamento" name="data_ultimo_carregamento"
                                        value="{{ old('data_ultimo_carregamento') }}">
                                    @error('data_ultimo_carregamento')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 50%; padding-right:1rem;">
                                    <label for="data_ultima_prova_hidraulica">Data Ultimo Prova Hidraulica</label>
                                    <input type="date" max="2022-12-30" class="form-control"
                                        id="data_ultima_prova_hidraulica" name="data_ultima_prova_hidraulica"
                                        value="{{ old('data_ultima_prova_hidraulica') }}">
                                    @error('data_ultima_prova_hidraulica')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="manutencao_MNT">Manutenção MNT</label>
                                    <select class="custom-select form-control-border" id="manutencao_MNT"
                                        name="manutencao_MNT">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('manutencao_MNT')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="carregamento_MNT_AD">Manutenção MNT AD</label>
                                    <select class="custom-select form-control-border" id="carregamento_MNT_AD"
                                        name="carregamento_MNT_AD">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('carregamento_MNT_AD')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="tipo">Tipo</label>
                                    <select class="custom-select form-control-border" id="tipo" name="tipo">
                                        <option selected></option>
                                        <option>
                                            C
                                        </option>
                                        <option>
                                            S
                                        </option>
                                    </select>
                                    @error('tipo')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="peso_CO2_kg">Peso CO2 Kg</label>
                                    <input type="number" min="0" step="0.001" class="form-control"
                                        id="peso_CO2_kg" name="peso_CO2_kg" placeholder="Enter Peso CO2 Kg"
                                        value="{{ old('peso_CO2_kg') }}">
                                    @error('peso_CO2_kg')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="prova_hidraulica">Prova Hidraulica</label>
                                    <select class="custom-select form-control-border" id="prova_hidraulica"
                                        name="prova_hidraulica">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('prova_hidraulica')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="selo_seguranca">Selo Segurança</label>
                                    <select class="custom-select form-control-border" id="selo_seguranca"
                                        name="selo_seguranca">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('selo_seguranca')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="O_Ring">O Ring</label>
                                    <select class="custom-select form-control-border" id="O_Ring" name="O_Ring">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('O_Ring')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="cavilha">Cavilha</label>
                                    <select class="custom-select form-control-border" id="cavilha" name="cavilha">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('cavilha')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="manometro">Manometro</label>
                                    <select class="custom-select form-control-border" id="manometro" name="manometro">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('manometro')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="difusor">Difusor</label>
                                    <select class="custom-select form-control-border" id="difusor" name="difusor">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('difusor')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="base_plastica">Base Plástica</label>
                                    <select class="custom-select form-control-border" id="base_plastica"
                                        name="base_plastica">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('base_plastica')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="rotulo">Rotulo</label>
                                    <select class="custom-select form-control-border" id="rotulo" name="rotulo">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('rotulo')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div style="display: flex;">
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="sparklets_CO2">Sparklets CO2</label>
                                    <select class="custom-select form-control-border" id="sparklets_CO2"
                                        name="sparklets_CO2">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('sparklets_CO2')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="aprovado">Aprovado</label>
                                    <select class="custom-select form-control-border" id="aprovado" name="aprovado">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('aprovado')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="serv_carga">Serviço ou Carga</label>
                                    <select class="custom-select form-control-border" id="serv_carga" name="serv_carga">
                                        <option selected></option>
                                        <option>
                                            Serviço
                                        </option>
                                        <option>
                                            Carga
                                        </option>
                                    </select>
                                    @error('serv_carga')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group" style="flex: 25%; padding-right:1rem;">
                                    <label for="extintor_novo">Extintor Novo</label>
                                    <select class="custom-select form-control-border" id="extintor_novo"
                                        name="extintor_novo">
                                        <option selected></option>
                                        <option value="1" @if (old('active') == 1) @endif>
                                            Sim
                                        </option>
                                        <option value="0" @if (old('active') == 0) @endif>
                                            Não
                                        </option>
                                    </select>
                                    @error('extintor_novo')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motivo_rejeitado">Motivo Rejeitado</label>
                                <textarea type="text" class="form-control" id="motivo_rejeitado" name="motivo_rejeitado"
                                    placeholder="Enter Motivo Rejeitado" value="{{ old('motivo_rejeitado') }}"></textarea>
                                @error('motivo_rejeitado')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('homePage') }}" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
