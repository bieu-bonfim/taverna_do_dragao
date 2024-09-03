<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Editar Comanda - Mesa {{ $order->tableNumber }}</h1>
                <a href={{ url()->previous() }} class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Voltar
                </a>
            </div>
            <form class="form-dash-edit-order row g-3" action="{{ route('dashboard.order.update', $order->id) }}"
                method="post">
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
