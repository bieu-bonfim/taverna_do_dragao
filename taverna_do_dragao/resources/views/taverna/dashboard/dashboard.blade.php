<x-layout title="Dashboard">
    <main class="main-dashboard">
        <img class="background-dashboard" src="/img/background_login.png" alt="Header do Taverna do Dragão">
        <form class="form-dashboard row g-3">
                <h1>Acessar conta</h1>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label label-dashboard">Nome completo</label>
                    <input type="text" class="form-control" id="validationDefault01" required>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault01" class="form-label label-dashboard">E-mail</label>
                    <input type="email" class="form-control" id="validationDefault01" required>
                </div>
                <button type="button" class="btn btn-dark">Entrar</button>
        </form>
    </main>
</x-layout>
