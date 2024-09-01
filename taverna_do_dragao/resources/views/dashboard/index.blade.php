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
                <h1 class="h1-dash">Dashboard</h1>
            </div>
        </section>
    </main>
</x-layout>
