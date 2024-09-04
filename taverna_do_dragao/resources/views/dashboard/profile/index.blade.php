<x-layout title="Dashboard">
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Editar perfil</h1>
            </div>
            <form class="form-dash row g-3" action="{{ route('dashboard.profile.update') }}" method="post">
                @csrf
                @method('PUT')
                    <div class="form-items-dash col-md-2">
                        <label for="username" class="form-label label-dashboard">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-items-dash col-md-2">
                        <label for="email" class="form-label label-dashboard">E-mail</label>
                        <input type="tel" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-dark">Entrar</button>
            </form>
        </section>
    </main>
</x-layout>