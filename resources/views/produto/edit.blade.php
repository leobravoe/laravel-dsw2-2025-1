<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    {{-- @dump($produto) --}}
    <div class="container">
        <form method="post" action="/produto/{{ $produto->id }}" enctype="multipart/form-data">
            @CSRF
            @METHOD("put")
            <div class="my-2">
                <label for="id-input-id" class="form-label">ID</label>
                <input id="id-input-id" type="text" class="form-control" value="{{ $produto->id }}" disabled>
            </div>
            <div class="my-2">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input name="nome" id="id-input-nome" type="text" class="form-control" value="{{ $produto->nome }}">
            </div>
            <div class="my-2">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input name="preco" id="id-input-preco" type="text" class="form-control" value="{{ $produto->preco }}">
            </div>
            <div class="my-2">
                <label for="id-input-Tipo_Produtos_id" class="form-label">Tipo</label>
                <select id="id-select-Tipo_Produtos_id" name="Tipo_Produtos_id" class="form-select">
                    @foreach ($tipoProdutos as $tipoProduto)
                        {{-- Quando eu estiver imprimindo $tipoProduto --}}
                        {{-- Preciso verificar se: --}}
                        {{-- $produto->Tipo_Produtos_id == $tipoProduto->id --}}
                        @if ($produto->Tipo_Produtos_id == $tipoProduto->id)
                            <option value="{{ $tipoProduto->id }}" selected>{{ $tipoProduto->descricao }}</option>
                        @else
                            <option value="{{ $tipoProduto->id }}">{{ $tipoProduto->descricao }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="my-2">
                <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
                <input name="ingredientes" id="id-input-ingredientes" type="text" class="form-control" value="{{ $produto->ingredientes }}">
            </div>
            <!-- Adicionando campo de upload de imagem -->
            <div class="my-3">
                <label for="id-input-imagem" class="form-label">Imagem</label>
                <input id="id-input-imagem" type="file" class="form-control" name="imagem">
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('produto.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
