@extends('includes.base')

@section('title', 'Produtos Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $error)
                {{  $error }}
        @endforeach
    @endif

    <form action="{{ route('produtos.addSave') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome do Produto" value="{{ old('name') }}">
        <br>
        <input type="text" name="price" min="0" step="0.01" placeholder="Preço do Produto" value="{{ old('price') }}">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade" value="{{ old('quantity') }}">
        <hr>
        <button type="submit">Adicionar Produto</button>
    </form>
@endsection
