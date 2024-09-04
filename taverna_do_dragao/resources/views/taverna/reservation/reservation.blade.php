<x-layout title="Reserva">
    @isset($message)
        <div class="alert-message alert alert-warning alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close btn" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endisset
    <main class="margin main-reservation">
        <div class="margin container-div-form-reservation">
            <h1>Crie aqui a sua reserva </h1>

            <form action="/reservation" class="form-reservation row g-3" method="post">
                @csrf
                <div class="col-md-2">
                    <label for="name" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-md-2">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-2">
                    <label for="phone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="col-md-2">
                    <label for="chairQuantity" class="form-label">Quantidade de cadeiras <span
                            style="color: gray; font-size:15px;">(Máx 8)</span></label>
                    <input type="number" class="form-control" id="chairQuantity" name="chairQuantity" min="1"
                        max="8" maxlength="1" required>
                </div>
                <div class="col-md-2">
                    <label for="reservationDate" class="form-label">Data da reserva</label>
                    <input type="date" class="form-control" id="reservationDate" name="reservationDate" required>
                </div>
                <div class="col-md-2  text-center">
                    <span>Se precisar editar a reserva, entre em contato com a gente</span>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>
        </div>
    </main>
</x-layout>
