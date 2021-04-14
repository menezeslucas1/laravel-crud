@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php $valor = number_format($produto->valor, 2, ',', '.');?>
<div class="jumbotron ml-5">
    <h1 class="display-4">{{$produto->nome}}</h1>
    <h2 class="lead">R${{$valor}}</h2>
    <hr class="my-4">
    <p>{{$produto->descricao}}</p>
    <a class="btn btn-primary btn-sm" href="{{route('produtos')}}" role="button"><i class="fas fa-arrow-left mr-1"></i>Todos</a>
    <a class="btn btn-info btn-sm" href="{{route('produtos.edit', $produto)}}" role="button"><i class="fas fa-edit text-white mr-1"></i>Editar</a>
    <a class="btn btn-danger btn-sm" href="{{route('produtos.modal_delete', $produto)}}" role="button"><i class="fas fa-trash text-white"></i>Excluir</a>
</div>
@endsection
