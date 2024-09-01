<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Editar comanda {{ $order->id }}</h1>
                <a href="/dashboard/gestao-comandas">
                    <button class="btn btn-light">
                        Ver todas comandas
                    </button>
                </a>
            </div>
            <form class="form-dash-edit-order row g-3" action="{{ route('dashboard.order.update', $order->id) }}"  method="post">
                @csrf
                @method('PUT')
                <section class="form-dash-edit-order ">
                    <div>
                        <div class="form-items-dash col-md-2">
                            <label for="customerName" class="form-label label-dashboard">Nome do cliente</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                value="{{ $order->customerName }}" required>
                        </div>
                        <div class="form-items-dash col-md-2">
                            <label for="customerPhone" class="form-label label-dashboard">Telefone do cliente</label>
                            <input type="tel" class="form-control" id="customerPhone" name="customerPhone"
                                value="{{ $order->customerPhone }}" required>
                        </div>
                        <div class="form-items-dash col-md-2">
                            <label for="tableNumber" class="form-label label-dashboard">Número da mesa</label>
                            <input type="number" class="form-control" id="tableNumber" name="tableNumber"
                                value="{{ $order->tableNumber }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-edit">Editar comanda</button>

                    </div>
                    <div>
                        {{-- <div class="form-items-dash col-md-2">
                            <label for="customerName" class="form-label label-dashboard">Nome do cliente</label>
                            <input type="text" class="form-control" id="customerName" name="customerName"
                                value="{{ $order->customerName }}" required>
                        </div>
                        <div class="form-items-dash col-md-2">
                            <label for="customerPhone" class="form-label label-dashboard">Telefone do cliente</label>
                            <input type="tel" class="form-control" id="customerPhone" name="customerPhone"
                                value="{{ $order->customerPhone }}" required>
                        </div> --}}

                      
                    </div>
         
                </section>
            </form>

        </section>
    </main>
</x-layout>
