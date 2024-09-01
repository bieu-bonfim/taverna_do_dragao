<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Visualizar comanda da Mesa {{ $order->tableNumber }}</h1>
            </div>

            <ul class="list-group">
                <li class="list-group-item">Mesa {{ $order->tableNumber }}</li>
                <li class="list-group-item">Nome do cliente: {{ $order->customerName }}</li>
                <li class="list-group-item">Telefone do cliente:{{ ' ' }} {{ $order->customerPhone }}</li>
                @foreach ($order->Product as $product)
                    <li class="list-group-item">
                        {{ $product->name }} | 
                        Quantidade: {{ $product->pivot->quantity }} 
                        | Preço unitário: R${{ number_format($product->price, 2) }}
                        | Preço parcial: R$ {{  number_format( number_format($product->price, 2) *  $product->pivot->quantity, 2 )}}
                    </li>
                @endforeach
                <li class="list-group-item">Preço total: R$ {{ number_format($totalPrice, 2) }}</li>
            </ul>

        </section>
    </main>
</x-layout>
