@extends('adminlte::page')

@section('title', 'Rastsystem')

@section('content_header')
<h1>Perfil</h1>
@stop

@section('content')
<div class="row">
    <!-- Modal Create Usuário -->
    @include("perfil.add")
    <!-- Modal Create Usuário -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Lista de Perfis</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-right mb-5">
                        <!-- Botõa adiciona Usuário -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-usuario">
                            Adiciona Usuário
                        </button>
                        <!-- Fim Botõa adiciona Usuário -->
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Perfil</th>
                                        <th>Status</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr class="text-sm">
                                        <td>{{$usuario->nome}}</td>
                                        <td>{{$usuario->login}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>
                                            {!! $usuario->status == 1? 
                                                '<span class="badge badge-success">Ativo</span>'
                                                : 
                                                '<span class="badge badge-danger">desativado</span>'!!}
                                            </td>
                                        <td>
                                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop