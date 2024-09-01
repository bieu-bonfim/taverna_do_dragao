<x-layout title="Login">
    <main class="main-dashboard">
        <img class="background-dashboard" src="/img/background_login.png" alt="Header do Taverna do Dragão">
        <form class="form-dashboard row g-3" action="/login/save" method="post">
            @csrf
                <h1>Acessar conta</h1>
                <div class="col-md-2">
                    <label for="email" class="form-label label-dashboard">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-2">
                    <label for="password" class="form-label label-dashboard">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-dark">Entrar</button>
        </form>
    </main>
</x-layout>
