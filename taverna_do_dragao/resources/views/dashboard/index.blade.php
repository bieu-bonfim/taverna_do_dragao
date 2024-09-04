<x-layout title="Dashboard">
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset
    <main class="main-dash">
        <x-dashboard username="{{ $user->username }}" useremail="{{ $user->email }}"></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">   
                <h1 class="h1-dash">Dashboard</h1>
            </div>
            {{-- <p style="color:white;">Usuário: {{ $user->username }}</p>
            <p style="color:white;">E-mail: {{ $user->email }}</p> --}}
        </section>
    </main>
</x-layout>
