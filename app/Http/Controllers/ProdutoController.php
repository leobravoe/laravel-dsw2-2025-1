<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // buscar todos os produtos cadastrado na tabela
        $produtos = DB::select("SELECT Produtos.*, 
                                       Tipo_Produtos.descricao 
                                FROM Produtos 
                                JOIN Tipo_Produtos ON Produtos.Tipo_Produtos_id = Tipo_Produtos.id;");
        // dd($produtos);
        return view("produto.index")->with("produtos", $produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoProdutos = DB::select("SELECT * FROM Tipo_Produtos");
        return view("produto.create")->with("tipoProdutos", $tipoProdutos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // use \App\Models\Produto;
        // Crio um objeto $produto do Model
        $produto = new Produto();
        // informação no model =recebe= informação que veio da view
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
        $produto->ingredientes = $request->ingredientes;
        $produto->urlImage = $request->urlImage;
        // Salva o model no banco de dados
        $produto->save();
        // Força recarregar a página /produto
        return redirect()->route("produto.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
