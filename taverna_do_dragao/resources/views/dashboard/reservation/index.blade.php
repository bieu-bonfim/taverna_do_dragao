<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Gestão de reservas</h1>
                {{-- <a href="/dashboard/criar-comanda">
                    <button class="btn btn-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-clipboard-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7" />
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                        </svg>
                        Criar comanda
                    </button>
                </a> --}}
            </div>
            <div class="div-cards-reservations table-responsive">
                <table class="table table-light">
                    <thead>
                        <tr style="color: white;">
                            <th scope="col" style="color: white;" class="bg-primary">Código</th>
                            <th scope="col" style="color: white;"  class="bg-primary">Nome</th>
                            <th scope="col" style="color: white;"  class="bg-primary">E-mail</th>
                            <th scope="col" style="color: white;"  class="bg-primary">Telefone</th>
                            <th scope="col" style="color: white;" class="bg-primary">
                                Data da reserva
                                <input type="date" id="filterDate" class="form-control form-control-sm" style="display: inline; width: auto;">
                                <button type="button" onclick="filterReservations()" class="btn btn-light btn-sm" style="display: inline;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                        <path d="M1.5 1.5v1l5 5V14l3-3V7.5l5-5v-1h-13zM3 2h10l-4.5 4.5V10.5L8 11V6.5L3 2z"/>
                                    </svg>
                                </button>
                            </th>
                            <th scope="col" style="color: white;"  class="bg-primary">Qntd. Cadeiras</th>
                            <th scope="col" style="color: white;"  class="bg-primary">Funcionalidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <th scope="row">{{ $reservation->id }}</th>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ date('d-m-Y', strtotime($reservation->reservationDate)) }}</td>
                                <td>{{ $reservation->chairQuantity }}</td>
                                <td style="display: flex; gap:12px;">
                                    <a
                                        href="{{ route('dashboard.reservation.edit', $reservation->id) }}"class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>
                                    </a>
                                    <form action="{{ route('dashboard.reservation.delete', $reservation->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </section>
    </main>
</x-layout>
<script>
    function filterReservations() {
        var selectedDate = document.getElementById('filterDate').value;
        if (selectedDate === "") {
            showAllRows();
            return;
        }

        // Ajustar para evitar o problema do fuso horário
        var dateObj = new Date(selectedDate);
        dateObj.setMinutes(dateObj.getMinutes() + dateObj.getTimezoneOffset());

        var day = ("0" + dateObj.getDate()).slice(-2);
        var month = ("0" + (dateObj.getMonth() + 1)).slice(-2);
        var year = dateObj.getFullYear();
        var formattedDate = day + "-" + month + "-" + year;

        // Obter todas as linhas da tabela
        var rows = document.querySelectorAll("tbody tr");

        // Iterar pelas linhas para aplicar o filtro
        rows.forEach(function(row) {
            var reservationDate = row.querySelector("td:nth-child(5)").innerText.trim();

            if (reservationDate === formattedDate) {
                row.style.display = ""; // Mostrar a linha
            } else {
                row.style.display = "none"; // Esconder a linha
            }
        });
    }
    function showAllRows() {
        var rows = document.querySelectorAll("tbody tr");
        rows.forEach(function(row) {
            row.style.display = ""; // Mostrar todas as linhas
        });
    }
</script>