@extends('includes.base')

@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
    <div>{{ session('sucesso') }}</div>
@endif

<form action="{{ route('produtos') }}" method="POST">
    @csrf
    <input type="text" name="busca">
    <input type="submit" value="Buscar">
</form>

    <table border="1" style=" border-collapse: collapse; text-align: center; width: 50%;">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>

        @foreach ($prods as $prod)
            <tr>
                <td><a href="{{ route('produtos.view', $prod->id) }}">{{ $prod->name }}</a></td>
                <td>R$ {{ number_format($prod->price, 2, ',', '.') }}</td>
                <td>{{ $prod->quantity }} </td>
                <td><a href="{{ route('produtos.edit', [$prod->id]) }}">Editar</a></td>
                <td><a href="{{ route('produtos.delete', [$prod->id]) }}">Remover</a></td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('produtos.add') }}">Adicionar Produto</a>
@endsection
