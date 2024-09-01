<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Adicionar produto - Mesa {{ $order->tableNumber }} </h1>
                <a href="/dashboard/gestao-comandas">
                    <button class="btn btn-light">
                        Ver todas comandas
                    </button>
                </a>
            </div>
            <form class="form-dash row g-3" action="{{ route('dashboard.order.updateOrderProduct', $order->id) }}"  method="post">
                @csrf
                <div>
                    <label class="form-label label-dashboard" for="productId">Nome do produto:</label>
                    <select id="productId" name="productId" class="form-select">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                    <div class="form-items-dash col-md-2">
                        <label for="quantity" class="form-label label-dashboard">Quantidade do produto</label>
                        <input type="number" class="form-control" id="quantity" name="quantity"required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-edit">Adicionar produto</button>
                </div> 
            </form>
            
        </section>
    </main>
</x-layout>
