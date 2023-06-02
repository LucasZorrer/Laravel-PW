@extends('includes.base')

@section('title', 'Produtos - Ver')

@section('content')
    <h2>{{$produto->name}} </h2>

    <p>
        <a href="{{ route('produtos') }}">Voltar</a>
    </p>
@endsection
