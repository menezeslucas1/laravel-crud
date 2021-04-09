@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<?php $delete="" ?>
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
                                    <a title="Detalhes do produto" href="{{route('produtos.descricao', $produto->id)}}"><i class="fas fa-eye mr-1"></i></a>
                                    <a title="Editar produto" href="{{route('produtos.edit', $produto)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                    <a title="Excluir produto" href="{{route('produtos.modal_delete', $produto)}}"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<div>
<!-- Modal -->
<div class="modal fade" id="delete_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{@$delete->nome}}
                {{@$delete->valor}}
                {{@$delete->descricao}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{route('produtos.delete', $delete)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
if(@$delete != ""){
    echo "<script>
    $(document).ready(function(){
        $('#delete_Modal').modal('show');
    });
    </script>
    ";
}
?>
@endsection
