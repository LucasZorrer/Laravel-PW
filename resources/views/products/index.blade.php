@extends('includes.base')

@section('title', 'Produtos')

@section('content')

    <table border="1" style=" border-collapse: collapse; text-align: center; width: 50%;">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        @foreach ($prods as $prod)
            <tr>
                <td>{{ $prod->name }}</td>
                <td>R$ {{ number_format($prod->price, 2, ',', '.') }}</td>
                <td>{{ $prod->quantity }} </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('produtos.add') }}">Adicionar Produto</a>
@endsection
