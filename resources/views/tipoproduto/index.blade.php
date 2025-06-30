<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de TipoProduto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <a href="{{route("tipoproduto.create")}}" class="btn btn-primary">Criar TipoProduto</a>
        <a href="#" class="btn btn-primary">Voltar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoProdutos as $tipoProduto)
                    <tr>
                        <th> {{ $tipoProduto->id }} </th>
                        <td> {{ $tipoProduto->descricao }} </td>
                        <td>
                            <a href="{{ route('tipoproduto.show', $tipoProduto->id) }}" class="btn btn-primary">Mostrar</a>
                            <a href="#" class="btn btn-secondary">Editar</a>
                            <a href="#" class="btn btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
