@extends('includes.base')

@section('title', 'Produtos')

@section('content')
<p>Produtos Funcionando</p>
<a href="{{ route('produtos.add')}}">Adicionar Produto</a>
@endsection
