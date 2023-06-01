@extends('includes.base')

@section('title', 'Produtos Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>.

    <form action="{{ route('produtos.addSave') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto">
        <br>
        <input type="text" name="price" min="0" step="0.01" placeholder="Preço do Produto">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade">
        <hr>
        <button type="submit">Adicionar Produto</button>
    </form>
@endsection
