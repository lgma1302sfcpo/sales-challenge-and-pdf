<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Vendas</title>
    <!-- Adicione aqui seus arquivos CSS, como Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        header {
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: white;
        }

        header h1 {
            color: white;
        }

        .btn-primary {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-primary:hover {
            background-color: #23272b;
            border-color: #1d2124;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }

        .table thead th {
            background-color: #343a40;
            color: white;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f1f1f1;
        }

        .container {
            margin-top: 40px;
        }

        .btn-sm {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <header class="bg-light py-3 border-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0">Sistema de Vendas</h1>
            <a href="/" class="btn btn-primary">Nova venda</a>
        </div>
    </header>
    <div class="container">
        <h1 class="my-4">Listagem de Vendas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Subtotal</th>
                    <th>Data da Venda</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->customer->name }}</td>
                    <td>{{ number_format($sale->total, 2, ',', '.') }} R$</td>
                    <td>{{ $sale->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-info btn-sm">Editar venda</a>
                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja deletar esta venda?')">Deletar venda</button>
                        </form>
                        <a href="{{ route('sales.pdf', $sale->id) }}" class="btn btn-warning btn-sm">Gerar PDF</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>