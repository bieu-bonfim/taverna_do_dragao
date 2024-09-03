<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Criar comanda</h1>
                <a href={{ url()->previous() }} class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Voltar
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
