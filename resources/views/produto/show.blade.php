<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    {{-- @dump($produto) --}}
    <div class="container">
        <div class="my-2">
            <label for="id-input-id" class="form-label">ID</label>
            <input id="id-input-id" type="text" class="form-control" value="{{ $produto->id }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-nome" class="form-label">Nome</label>
            <input id="id-input-nome" type="text" class="form-control" value="{{ $produto->nome }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-preco" class="form-label">Preço</label>
            <input id="id-input-preco" type="text" class="form-control" value="{{ $produto->preco }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-Tipo_Produtos_id" class="form-label">Tipo</label>
            <input id="id-input-Tipo_Produtos_id" type="text" class="form-control" value="{{ $produto->Tipo_Produtos_id }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-ingredientes" class="form-label">Ingredientes</label>
            <input id="id-input-ingredientes" type="text" class="form-control" value="{{ $produto->ingredientes }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-urlImage" class="form-label">UrlImage</label>
            <input id="id-input-urlImage" type="text" class="form-control" value="{{ $produto->urlImage }}" disabled>
        </div>
        <div class="my-2 text-center">
            <img src="{{$produto->urlImage}}" class="w-50">
        </div>
        <div class="my-2">
            <label for="id-input-updated_at" class="form-label">Updated At</label>
            <input id="id-input-updated_at" type="text" class="form-control" value="{{ $produto->updated_at }}" disabled>
        </div>
        <div class="my-2">
            <label for="id-input-created_at" class="form-label">Created At</label>
            <input id="id-input-created_at" type="text" class="form-control" value="{{ $produto->created_at }}" disabled>
        </div>
        <div class="my-2">
            <a href="{{route("produto.index")}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</body>

</html>
