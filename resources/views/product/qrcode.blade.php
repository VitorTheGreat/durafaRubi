@extends('layouts.black.main')

@section('title', 'Imprimir Etiqueta')<!-- adding a title -->

@section('layouts.black.content')
<h1>Imprimir Etiqueta</h1>
<p>Produto: {{$produto->idproduto}}</p>

<div class="noprint">
    <h2>Escolha quais etiquetas Imprimir</h2>
    @for ($i = 1; $i < 18; $i++)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="check{{$i}}">
            <label class="form-check-label" for="inlineCheckbox1">{{$i}}</label>
        </div>
    @endfor
</div>

<div class="row">
@for ($i = 1; $i < 18; $i++)
    <div class="etiqueta-correction">
        <div class="etiqueta" name="">
          <table>
            <tbody>
              <tr>
                <th><img class="img-responsive" src="{{$produto->barcode_num}}"/></th>
                <td class="font_etiqueta_tamanho">{{$produto->tamanho}}</td>
                <td><p class="text-center font_etiqueta">REF: {{$produto->referencia}}</p></td>
              </tr>
              <tr>
                <th scope="row" colspan="3"><p class="numero_barcode">{{$produto->barcode_num}}</p></th>
              </tr>
              <tr>
                <th scope="row" colspan="3" class="font_etiqueta">{{$produto->tipo_full." ".$produto->marca." ".$produto->cor}}</th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
@endfor
</div>

@endsection
