@extends('layouts.template')
@section('title', 'product')
@section('content')
<?php $price = number_format($product->valor, 2, ',', '.');?>
<div class="" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{$product->nome}}</h3>
            </div>
            <div class="modal-body">
                <p>{{$product->descricao}}.</p>
                <p>R$<?php echo $price?>.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary btn-sm" href="{{route('products')}}" role="button"><i class="fas fa-arrow-left mr-1"></i>Todos</a>
                <a class="btn btn-info btn-sm" href="{{route('products.edit', $product)}}" role="button"><i class="fas fa-edit text-white mr-1"></i>Editar</a>
                <a class="btn btn-danger btn-sm" href="{{route('products.confirmDelete', $product)}}" role="button"><i class="fas fa-trash text-white"></i>Excluir</a>
            </div>
        </div>
    </div>
</div>

@endsection
