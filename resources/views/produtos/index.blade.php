@extends('layouts.template')
@section('title', 'Produtos')
@section('content')

<?php
    @session_start();
?>
@section('bar')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('produtos.inserir')}}"><i class="fas fa-plus"></i> Novo</a>
</li>
@endsection

<div class='container'>
<!--    <a href="{{route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>-->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->valor}}</td>
                                <td>
                                    <a title="Detalhes do produto" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye mr-1"></i></a>
                                    <a title="Editar produto" href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                    <a title="Excluir produto {{$produto->id}}" href="{{route('produtos.modal_delete', $produto)}}"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$produtos->links()}}
        </div>
    </div>
<div>

@endsection
