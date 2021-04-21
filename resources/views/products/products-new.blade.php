@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('products.post.new')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Nome</label>
                    <input class="form-control" id="" name="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Valor</label>
                    <input class="form-control" id="" name="price">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
        </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
