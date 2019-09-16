<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Fornecedor;
use App\Models\Cor;
use App\Models\Estoque;
use App\Models\Referencia;
use App\Models\Tamanho;
use App\Models\Tipo;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Fornecedor::all();
        $colors = Cor::all();
        $references = Referencia::all();
        $types = Tipo::all();
        $sizes = Tamanho::all();
        $storages = Estoque::all();

        return view('product.create', compact('providers', 'colors', 'references', 'types', 'sizes', 'storages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'referencia' => 'required|min:3',
            'marca' => 'required|min:3',
            'cor' => 'required|min:3',
            'id_tipo' => 'required',
            'descricao' => 'required|min:3',
            'idtamanho' => 'required',
            'quantidade' => 'required',
            'preco_compra' => 'required',
            'preco_venda' => 'required',
            'id_fornecedor' => 'required',
            'id_estoques' => 'required'
        ]);

        dd($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $Produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $Produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
