@extends('layouts.template')
@section('title', 'Produto')
@section('content')
    <?php $valor = number_format($produto->valor, 2, ',', '.');?>
    <h1><?php echo $produto->nome?><h1>
    <h3>R$<?php echo $valor?>.</h3>
    <h3><?php echo $produto->descricao?></h3>
@endsection
<!--
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
-->