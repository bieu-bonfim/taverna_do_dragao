<x-layout title="Reserva">
    <main class="margin main-reservation">
        <div class="container-div-parchment">
            <div id="parchment"></div>
            <svg>
                <filter id="wavy2">
                    <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1"></feTurbulence>
                    <feDisplacementMap in="SourceGraphic" scale="20" />
                </filter>
            </svg>
        </div>
        <div class="container-div-form-reservation">
            <h1>Crie aqui a sua reserva</h1>
            <form class="form-reservation row g-3">
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label">Quantidade de cadeiras</label>
                    <input type="number" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label">Data da reserva</label>
                    <input type="date" class="form-control" id="validationDefault01" required>
                </div>
                <button type="button" class="btn btn-dark">Enviar</button>
            </form>
        </div>
   </main>
</x-layout>
