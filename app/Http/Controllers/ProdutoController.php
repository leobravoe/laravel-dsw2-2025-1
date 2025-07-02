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
        $produto->nome             = $request->nome;
        $produto->preco            = $request->preco;
        $produto->Tipo_Produtos_id = $request->Tipo_Produtos_id;
        $produto->ingredientes     = $request->ingredientes;

        // Verifica se uma imagem foi enviada e a armazena
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');                              // pega a imagem enviada e coloca na variável $imagem
                                                                             // Usa explode para dividir a string de microtime em duas partes
            list($segundos, $microsegundos) = explode(".", microtime(true)); // retorna uma string no formato "segundos.microsegundos" desde a era Unix (1 de janeiro de 1970)
                                                                             // Gera o nome da imagem no formato: nome-YYYY-MM-DD-SS-MS.ext
            $nomeImagem    = $produto->nome . date("-Y-m-d-") . $segundos . "-" . $microsegundos . "." . $imagem->getClientOriginalExtension();
            $caminhoImagem = public_path("/img/produto");    // caminho da pasta public
            $imagem->move($caminhoImagem, $nomeImagem);      // coloca a imagem na pasta
            $produto->urlImage = "/img/produto/$nomeImagem"; // Salva o caminho da imagem no banco de dados
        } else {
            $produto->urlImage = "/img-default/default.png"; // url de imagem padrão
        }

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
        // DB::select sempre retorna um ARRAY []
        // Essa consulta retorna um array com 1 objeto ([obj]) ou um array vazio []
        $produtos = DB::select('SELECT * FROM Produtos where id = ?', [$id]);
        //dd($produtos);

        // Cláusula para saber se encontro algo ou não
        if (count($produtos) == 1) {
            // Mando a posição 0 do array $produtos para a variável $produto na view
            return view("produto.show")->with("produto", $produtos[0]);
        } else {
            return "Produto não encontrado";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Model:find() retorna sempre um objeto caso encontre o elemento, ou null caso não encontre
        $produto = Produto::find($id);
        // Verifico se o objeto foi encontrado pelo Model:find()
        if ($produto != null) {
            // Crio o variável $tipoProdutos e coloco um array com
            // todos os tipos do banco de dados
            $tipoProdutos = DB::select('SELECT * FROM Tipo_Produtos');
            // Mando carregar a view edit de Produto e dentro dela crio a variável $produto
            return view("produto.edit")->with("produto", $produto)->with("tipoProdutos", $tipoProdutos);
        } else {
            return "Produto não encontrado";
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo $request->nome . "<br>";
        echo $request->preco . "<br>";
        echo $request->Tipo_Produtos_id . "<br>";
        echo $request->ingredientes . "<br>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
