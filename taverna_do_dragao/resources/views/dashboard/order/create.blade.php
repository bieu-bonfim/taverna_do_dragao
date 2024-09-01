<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Criar comanda</h1>
                <a href="/dashboard/gestao-comandas">
                    <button class="btn btn-light">
                          Ver todas comandas
                    </button>
                </a>
            </div>
            <form class="form-dash row g-3" action="/dashboard/order/create" method="post">
                @csrf
                    <div class="form-items-dash col-md-2">
                        <label for="customerName" class="form-label label-dashboard">Nome do cliente</label>
                        <input type="text" class="form-control" id="customerName" name="customerName" required>
                    </div>
                    <div class="form-items-dash col-md-2">
                        <label for="customerPhone" class="form-label label-dashboard">Telefone do cliente</label>
                        <input type="tel" class="form-control" id="customerPhone" name="customerPhone" required>
                    </div>
                    <div class="form-items-dash col-md-2">
                        <label for="tableNumber" class="form-label label-dashboard">Número da mesa</label>
                        <input type="number" class="form-control" id="tableNumber" name="tableNumber" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Entrar</button>
            </form>
            
        </section>
    </main>
</x-layout>
