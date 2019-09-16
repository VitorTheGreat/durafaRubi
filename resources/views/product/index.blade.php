@extends('layouts.black.main')

@section('title', 'Produtos')<!-- adding a title -->

@section('layouts.black.content')

<h1>Seção Produto</h1>
<hr />
<div class="row">
    <div class="col-lg-12">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Opções</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> O que deseja fazer?</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="/product/create">Novo Produto</a>
            <a class="btn btn-primary" href="#">Novo Tamanho</a>
            <a class="btn btn-primary" href="#">Nova Referência</a>
            <a class="btn btn-primary" href="#">Novo Tipo</a>
            <a class="btn btn-primary" href="#">Nova Cor</a>
            <a class="btn btn-primary" href="#">Estoque Completo</a>
        </div>
      </div>
    </div>
  </div>

  <h2>Lista de Produtos</h2>
  <hr />
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title"> Simple Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th class="text-center">
                    Salary
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td class="text-center">
                    $36,738
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
