@extends('layouts.black.main')

@section('title', 'Imprimir Etiqueta')<!-- adding a title -->

@section('layouts.black.content')
<h1>Imprimir Etiqueta</h1>
<p>Produto: {{$produto->idproduto}}</p>

<table>
    <tr>
        <td>{{$produto->referencia}}</td>
        <td>{{$produto->nome_estoques}}</td>
        <td>{{$produto->quantidade}}</td>
        <td>{{$produto->tamanho}}</td>
        <td>{{$produto->marca}}</td>
        <td>{{$produto->preco}}</td>
        <td>{{$produto->tipo_full}}</td>
        <td>{{$produto->cor}}</td>
        <td>{{$produto->descricao}}</td>
    </tr>
</table>

@endsection
