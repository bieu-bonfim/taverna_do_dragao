<x-layout title="Carrinho de compras">
    <main class="margin">
        @if(session('cart'))
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0 @endphp
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr>
                            <td>{{ $details['name'] }}</td>
                            <td>{{ $details['quantity'] }}</td>
                            <td>R${{ $details['price'] }}</td>
                            <td>R${{ $details['price'] * $details['quantity'] }}</td>
                            <td>
                                <a href="{{ route('cart.remove', $id) }}" class="btn btn-danger">Remover</a>
                                <a href="{{ route('cart.subtract1', $id) }}" class="btn btn-danger">-</a>
                                <a href="{{ route('cart.add1', $id) }}" class="btn btn-danger">+</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-right">
                <h4><strong>Total: R$ {{ number_format($total, 2, ',', '.') }}</strong></h4>
            </div>
        @else
            <h1 class="cart-empty">Seu carrinho está vazio</h1>
        @endif
   </main>
</x-layout>