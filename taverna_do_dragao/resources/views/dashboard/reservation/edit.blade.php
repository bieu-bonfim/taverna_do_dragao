<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Editar reserva {{ $reservation->id }}</h1>
                <a href={{ url()->previous() }} class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Voltar
                </a>
            </div>
            <form action="{{ route('dashboard.reservation.update', $reservation->id) }}"class="form-reservation form-dash row g-3" method="post">
                @csrf
                @method('PUT')
                <div class="form-items-dash col-md-2">
                    <label for="name" class="form-label label-dashboard">Nome completo</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$reservation->name}}" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="email" class="form-label label-dashboard">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$reservation->email}}"  required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="phone" class="form-label label-dashboard">Telefone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="{{$reservation->phone}}" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="chairQuantity" class="form-label label-dashboard">Quantidade de cadeiras <span
                            style="color: gray; font-size:15px;">(Máx 8)</span></label>
                    <input type="number" class="form-control" id="chairQuantity" name="chairQuantity" value="{{$reservation->chairQuantity}}"  min="1"
                        max="8" maxlength="1" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="reservationDate" class="form-label label-dashboard">Data da reserva</label>
                    <input type="date" class="form-control" id="reservationDate" name="reservationDate" value="{{$reservation->reservationDate}}"  required>
                </div>
                <div class="form-items-dash col-md-2">
                    <span>Se precisar editar a reserva, entre em contato com a gente</span>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
            </form>

        </section>
    </main>
</x-layout>
