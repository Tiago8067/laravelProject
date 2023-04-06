@extends('user.homepage.homepage')

@section('grafico')
    <div>Grafico</div>
@endsection

@section('dataTable')
    <!-- Main content -->
    <section class="content" style="margin: 25px 25px 25px 25px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabela das Assistencias Técnicas</h3>
                            <a style="margin-right:10%;float: right;" href="{{ route('addDataTable') }}" class="btn btn-primary">Add
                                Assistencia</a>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nr do Relatorio</th>
                                        <!--e o id-->
                                        <th>Comercial</th>
                                        <th>Cliente</th>
                                        <th>Data</th>
                                        <th>Últ. Carregamento</th>
                                        <th>Ações</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nr do Relatorio</th>
                                        <th>Comercial</th>
                                        <th>Cliente</th>
                                        <th>Data</th>
                                        <th>Últ. Carregamento</th>
                                        <th>Ações</th>
                                        <th>Opções</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
