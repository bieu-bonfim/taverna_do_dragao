<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Visualizar comanda {{ $order->id }}</h1>

            </div>
            <ul>
                <li class="h1-dash">Mesa {{ $order->tableNumber }}</li>
                <li class="h1-dash">Nome do cliente: {{ $order->customerName }}</li>
                <li class="h1-dash">Telefone do cliente:{{" "}} {{ $order->customerPhone }}</li>
            </ul>

        </section>
    </main>
</x-layout>
