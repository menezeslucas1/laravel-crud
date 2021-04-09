@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
    <h1>Edição de produto</h1>
    <form method="POST" action="{{route('produtos.editar', $produto)}}">
        @csrf
        @method('put');
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Nome</label>
                    <input class="form-control" id="" name="nome" value="{{$produto->nome}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Valor</label>
                    <input class="form-control" id="" name="valor" value="{{$produto->valor}}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao">{{$produto->descricao}}</textarea>
        </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
