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

        // dd($data['idtamanho'], $data['quantidade']);
        //verify quantity and sizes
        foreach(array_combine($data['idtamanho'], $quantidade['quantidade']) as $idtamanho => $n ){
            if ($n != 0){
                echo "id tamanho: ".$idtamanho." - Quantidade: ".$n."<br />";

                $idreferencia = DB::select('SELECT idreferencia FROM referencia WHERE referencia = :referencia', ['referencia' => $data["referencia"]]);
                $idcor = DB::select('SELECT idcor FROM cor WHERE nome = :cor', ['cor' => $data["cor"]]);
                // var_dump($idreferencia[0]->idreferencia);
                // var_dump($idcor[0]->idcor);
                // echo 'id Ref: ' . $idreferencia[0]->idreferencia . '<br />';
                // echo 'id Cor: ' . $idcor[0]->idcor;

                $produto = Produto::create([
                    'descricao' => request('descricao'),
                    'marca' => request('marca'),
                    'preco_venda' => request('preco_venda'),
                    'preco_compra' => request('preco_compra'),
                    'id_estoques' => request('id_estoques'),
                    'referencia' => $idreferencia[0]->idreferencia,
                    'idtamanho' => $idtamanho,
                    'id_fornecedor' => request('id_fornecedor'),
                    'id_tipo' => request('id_tipo'),
                    'cor' => $$idcor[0]->idcor,
                ]);

                var_dump($produto);
                // $idproduto = Product::where('idproduto', $produto);
                // dd($idproduto);
                // echo $idproduto;
                // foreach ($idproduto as $idpro) {
                    // echo "id tamanho: ".$idtamanho." - Quantidade: ".$n."<br />";
                    // echo "Id produto: ".$idpro['idproduto']."<br />";
                // }
            }
        }
        // return redirect('product');
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
