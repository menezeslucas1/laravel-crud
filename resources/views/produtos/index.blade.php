@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class='container'>
    <a href="{{route('produtos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Produto</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->valor}}</td>
                                <td>
                                    <a title="Detalhes do produto" href="{{route('produtos.descricao', $produto->id)}}" class="fas fa-eye"></a>
                                    <a title="Editar produto" href="{{route('produtos.edit', $produto)}}" class="fas fa-edit text-info mr-1"></a>
                                    <a title="Excluir produto" href="{{route('produtos.delete', $produto)}}" class="fas fa-trash"></a>
                                </td>
                                </a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{$produtos->links()}}

<div>
@endsection
