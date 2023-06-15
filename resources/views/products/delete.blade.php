@extends('includes.base')

@section('title', 'Produtos')

@section('content')
    <h2>Apagar produto</h2>
    <p>Você está prestes a apagar {{ $produto->name }}</p>
    <p>Tem certeza de que quer fazer isso?</p>
    <form action="{{ route('produtos.deleteForReal', $produto->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Apagar">
    </form>


@endsection
