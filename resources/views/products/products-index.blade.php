@extends('layouts.template')
@section('title', 'products')
@section('content')

<?php
    @session_start();
?>
@section('bar')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('products.new')}}"><i class="fas fa-plus"></i> Novo</a>
</li>
@endsection

<div class='container'>
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
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->nome}}</td>
                                <td>{{$product->valor}}</td>
                                <td>
                                    <a title="Detalhes do product" href="{{route('products.show', $product->id)}}"><i class="fas fa-eye mr-1"></i></a>
                                    <a title="Editar product" href="{{route('products.edit', $product)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                    <a title="Excluir product {{$product->id}}" href="{{route('products.confirmDelete', $product)}}"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$products->links()}}
        </div>
    </div>
<div>

@endsection
