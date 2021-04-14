@extends('layouts.template')
@section('title', 'Produto')
@section('content')
<?php $valor = number_format($produto->valor, 2, ',', '.');?>
<div class="" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja mesmo excluir o Produto</h5>
            </div>
            <div class="modal-body">
                <p>{{$produto->nome}}.</p>
                <p>R$<?php echo $valor?>.</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="{{route('produtos')}}" role="button"><i class="fas fa-eye mr-1"></i>Ver</a>
                <a href="{{route('produtos')}}" type="button" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i>Cancelar</a>
                <form method="POST" action="{{route('produtos.delete', $produto)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash text-white"></i>Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
