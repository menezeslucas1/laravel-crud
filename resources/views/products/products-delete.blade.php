@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php $price = number_format($product->price, 2, ',', '.');?>
<div class="" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja mesmo excluir o Produto?</h5>
            </div>
            <div class="modal-body">
                <p>{{$product->name}}.</p>
                <p>R${{$price}}.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="{{route('products.get.view', $product->id)}}" role="button"><i class="fas fa-eye mr-1"></i>Ver</a>
                <a href="{{route('products.get.index')}}" type="button" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i>Cancelar</a>
                <form method="POST" action="{{route('products.delete.delete', $product)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash text-white"></i>Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
