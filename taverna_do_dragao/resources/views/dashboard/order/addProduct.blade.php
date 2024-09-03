<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Adicionar produto - Mesa {{ $order->tableNumber }} </h1>
                <a href={{ url()->previous() }} class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Voltar
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
