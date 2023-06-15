@extends('includes.base')

@section('title', 'Produtos Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    @if ($errors)
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif

    <form action="{{ url()->current() }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome do Produto" value="{{ old('name', $produto->name ?? '') }}">
    <br>
    <input type="text" name="price" min="0" step="0.01" placeholder="Preço do Produto"
        value="{{ old('price', $produto->price ?? '') }}">
    <br>
    <input type="number" name="quantity" placeholder="Quantidade" value="{{ old('quantity', $produto->quantity ?? '') }}">
    <hr>
    <button type="submit">Adicionar Produto</button>
    </form>
@endsection
