@extends('layouts.template')
@section('title', 'products')
@section('content')

<?php
    @session_start();
?>
@section('bar')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{route('products.get.new')}}"><i class="fas fa-plus"></i> Novo</a>
</li>
@endsection

<div class='container'>
    <div class="card shadow mb-4">
        <div class="card-body">
            <?php
                $paginator = $products;
            ?>
            @include("layouts.pagination")
            <div class="table-responsive mt-2">
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
                                <td>{{$product->name}}</td>
                                <td>R${{number_format($product->price, 2, ',', '.')}}</td>
                                <td>
                                    <a title="Detalhes do product" href="{{route('products.get.view', $product->id)}}"><i class="fas fa-eye mr-1"></i></a>
                                    <a title="Editar product" href="{{route('products.get.edit', $product)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                    <a title="Excluir product {{$product->id}}" href="{{route('products.get.delete', $product)}}"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('layouts.pagination')
        </div>
    </div>
<div>

@endsection
