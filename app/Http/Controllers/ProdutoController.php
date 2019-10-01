<?php

namespace App\Http\Controllers;

use App\Models\ControleEstoque;
use App\Models\Produto;
use App\Models\Fornecedor;
use App\Models\Cor;
use App\Models\Estoque;
use App\Models\Referencia;
use App\Models\SQLViews\ViewProdutos;
use App\Models\Tamanho;
use App\Models\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = ViewProdutos::all();

        return view('product.index', compact('produtos'));
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
        $product = new Produto();

        return view('product.create', compact('product', 'providers', 'colors', 'references', 'types', 'sizes', 'storages'));
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
            'descricao' => 'required|min:3',
            'marca' => 'required|min:3',
            'preco_venda' => 'required',
            'preco_compra' => 'required',
            'id_estoques' => 'required',
            'referencia' => 'required|min:3',
            'idtamanho' => 'required',
            'id_fornecedor' => 'required',
            'id_tipo' => 'required',
            'cor' => 'required|min:3'
        ]);
        $quantidade = request()->validate([
            'quantidade' => 'required',
        ]);

        $idreferencia = DB::select('SELECT idreferencia FROM referencia WHERE referencia = :referencia', ['referencia' => $data["referencia"]]);
        $idcor = DB::select('SELECT idcor FROM cor WHERE nome = :cor', ['cor' => $data["cor"]]);

        if(!$idreferencia) {
            $idreferencia = DB::insert('INSERT INTO referencia (referencia) VALUES (:referencia)', ['referencia' => $data["referencia"]]);
        }
        if(!$idcor) {
            $idcor = DB::insert('INSERT INTO users cor VALUES (:cor)', ['cor' => $data["cor"]]);
        }

        switch ($idreferencia) {
            case '':
            $idreferencia = DB::insert('INSERT INTO referencia (referencia) VALUES (:referencia)', ['referencia' => $data["referencia"]]);
                break;
            default:
            $idreferencia = DB::select('SELECT idreferencia FROM referencia WHERE referencia = :referencia', ['referencia' => $data["referencia"]]);
                break;
        }
        switch ($idcor) {
            case '':
                $idcor = DB::insert('INSERT INTO cor (cor) VALUES (:cor)', ['cor' => $data["cor"]]);
                break;
            default:
                $idcor = DB::select('SELECT idcor FROM cor WHERE nome = :cor', ['cor' => $data["cor"]]);
                break;
        }

        // try {
        //     //verify quantity and sizes
        //     foreach(array_combine($data['idtamanho'], $quantidade['quantidade']) as $idtamanho => $n ){
        //         if ($n != 0){

        //             $produto = Produto::create([
        //                 'descricao' => request('descricao'),
        //                 'marca' => request('marca'),
        //                 'preco_venda' => request('preco_venda'),
        //                 'preco_compra' => request('preco_compra'),
        //                 'id_estoques_produto' => request('id_estoques'),
        //                 'id_referencia_produto' => $idreferencia[0]->idreferencia,
        //                 'id_tamanho_produto' => $idtamanho,
        //                 'id_fornecedor_produto' => request('id_fornecedor'),
        //                 'id_tipo_produto' => request('id_tipo'),
        //                 'id_cor_produto' => $idcor[0]->idcor,
        //             ]);

        //             $qtd = ControleEstoque::create([
        //                 'quantidade' => $n,
        //                 'id_produto_controle' => $produto['id']
        //             ]);
        //         }
        //     }
        //     return back()->with('cad_produto', 'Produtos Cadastrados com Successo BRO!');

        // }catch(\Exception $e){
        //     return ['msg_error' => $e->getMessage()];
        //     // return back()->with('err', 'Erro ao cadastrar produto, tente novamente. Se o erro persistir, chame o Vitor.');
        // }
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
