<x-layout title="SignUp">
    <main class="main-dashboard">
        <img class="background-dashboard" src="/img/background_login.png">
        <form class="form-dashboard row g-3" action="/signup/save" method="post">
            @csrf
                <h1>Criar conta</h1>
                <div class="col-md-2">
                    <label for="username" class="form-label label-dashboard">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col-md-2">
                    <label for="email" class="form-label label-dashboard">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-md-2">
                    <label for="password" class="form-label label-dashboard">Senha</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                {{-- <div class="col-md-2">
                    <label class="form-label label-dashboard" for="userType">Estado do municipio:</label>
                    <select id="userType" name="userType" class="form-select">
                        <option value="admin">Admin</option>
                        <option value="employee">Funcionário</option>
                    </select>
                    </div> --}}
                <button type="submit" class="btn btn-dark">Cadastrar</button>
        </form>
    </main>
</x-layout>
