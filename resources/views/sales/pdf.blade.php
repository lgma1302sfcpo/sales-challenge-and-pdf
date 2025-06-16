<h1>Detalhes da Venda #{{ $sale->id }}</h1>
<p>Cliente: {{ $sale->customer->name }}</p>
<p>Data: {{ $sale->created_at->format('d/m/Y') }}</p>
<h3>Itens Vendidos</h3>
<ul>
    @foreach($sale->itemSales as $item)
    <li>{{ $item->product->name }} - Quantidade: {{ $item->quantity }} - Preço: {{ number_format($item->unit_price, 2, ',', '.') }} R$</li>
    @endforeach
</ul>
<p>Total: {{ number_format($sale->total, 2, ',', '.') }} R$</p>
@if ($sale->installments->count())
<h3>Parcelas</h3>
<table border="1" width="100%" cellspacing="0" cellpadding="6">
    <thead>
        <tr>
            <th>#</th>
            <th>Vencimento</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sale->installments as $i => $parcela)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ \Carbon\Carbon::parse($parcela->due_date)->format('d/m/Y') }}</td>
            <td>R$ {{ number_format($parcela->amount, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif