<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create de TipoProduto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="{{ route('produto.store') }}">
            @CSRF
            <div class="my-3">
                <label for="id-input-id" class="form-label">ID</label>
                <input id="id-input-id" type="text" class="form-control" aria-describedby="id-div-help" value="#" disabled>
                <div id="id-div-help" class="form-text">Não é necessário informar o ID para cadastrar um novo dado.</div>
            </div>
            <div class="my-3">
                <label for="id-input-nome" class="form-label">Nome</label>
                <input id="id-input-nome" name="nome" type="text" class="form-control" placeholder="Digite o nome do produto">
            </div>
            <div class="my-3">
                <label for="id-input-preco" class="form-label">Preço</label>
                <input id="id-input-preco" name="preco" type="number" class="form-control" placeholder="Digite o preço do produto" step=".01">
            </div>
            <div class="my-3">
                <label for="id-select-Tipo_Produtos_id" class="form-label">Tipo</label>
                {{-- <input id="id-input-Tipo_Produtos_id" name="Tipo_Produtos_id" type="text" class="form-control" placeholder="Digite o tipo do produto"> --}}
                <select name="Tipo_Produtos_id" id="id-select-Tipo_Produtos_id" class="form-select">
                    <option value="1">Pizza</option>
                    <option value="2">Suco</option>
                    <option value="3">Cerveja</option>
                </select>
            </div>
            <div class="my-3">
                <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
                <input id="id-input-ingredientes" name="ingredientes" type="text" class="form-control" placeholder="Digite os ingredientes do produto">
            </div>
            <div class="my-3">
                <label for="id-input-urlImage" class="form-label">UrlImage</label>
                <input id="id-input-urlImage" name="urlImage" type="text" class="form-control" placeholder="Digite o UrlImage do produto">
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <a href="{{ route('produto.index') }}" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</body>

</html>
