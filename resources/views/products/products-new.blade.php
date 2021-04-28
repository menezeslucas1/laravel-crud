@extends('layouts.template')
@section('title', 'Criar Produto')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('products.post.new')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="nameInput">
                        Nome
                        <i class="text-danger">{{$errors->first('name')}}</i>
                    </label>
                    <input class="form-control" id="nameInput" name="name" value="{{old('name')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="pricInput">
                        Preço
                        <i class="text-danger">{{$errors->first('price')}}</i>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input class="form-control" name="price" value="{{old('price')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="descriptionInput">
                Descrição
                <i class="text-danger">{{$errors->first('description')}}</i>
            </label>
            <textarea class="form-control" id="descriptionInput" rows="3" name="description">{{old('description')}}</textarea>
        </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
       <a href="{{route('products.get.index')}}" type="button" class="btn btn-secondary"><i class="fas fa-arrow-left mr-1"></i>Cancelar</a>
    </form>
</div>
@endsection
