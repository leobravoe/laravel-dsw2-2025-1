<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TipoProduto;

class TipoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipoProdutos = DB::select("SELECT * FROM Tipo_Produtos");
        //dd($tipoProdutos); // debug de variável
        return view("tipoproduto.index")->with("tipoProdutos", $tipoProdutos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tipoproduto.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // crio a variável $tipoProduto
        // essa variável recebe a criação de um novo objeto Model
        // use App\Models\TipoProduto;
        $tipoProduto = new TipoProduto();
        // Dentro do objeto da classe Model eu tenho tudo que tem na tabela do banco.
        // Uma das coisas que tenho na tabela do banco é a descricao
        // Tudo que está NOMEADO dentro da view que enviou os dados pode ser acessado pela
        // variável $request
        $tipoProduto->descricao = $request->descricao;
        // realiza a operação salvar do model;
        $tipoProduto->save();
        // Força o navegador a dar um GET na rota
        return redirect()->route("tipoproduto.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // DB::select sempre retorna um ARRAY []
        // Essa consulta retorna um array com 1 objeto ([obj]) ou um array vazio []
        $tipoProdutos = DB::select('SELECT * FROM Tipo_Produtos where id = ?', [$id]);
        //dd($produtos);

        // Cláusula para saber se encontro algo ou não
        if (count($tipoProdutos) == 1) {
            // Mando a posição 0 do array $tipoProdutos para a variável $tipoProduto na view
            return view("tipoproduto.show")->with("tipoProduto", $tipoProdutos[0]);
        } else {
            return "Produto não encontrado";
        }
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
