@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
    <h1>Edição de produto</h1>
    <form method="POST" action="{{route('products.put.edit', $product)}}">
        @csrf
        @method('put');
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label>
                        Nome
                        <i class="text-danger">{{$errors->first('name')}}</i>
                    </label>
                    <input class="form-control" name="name" value="{{$product->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label">
                        Preço
                        <i class="text-danger">{{$errors->first('price')}}</i>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" name="price" value="{{$product->price}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1">
                Descrição
                <i class="text-danger">{{$errors->first('description')}}</i>
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->description}}</textarea>
        </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
       <a href="{{route('products.get.index')}}" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i>cancelar</a>
    </form>
</div>
@endsection
