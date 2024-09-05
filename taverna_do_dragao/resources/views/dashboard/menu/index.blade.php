<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Gestão de cardápio</h1>
                <a href="/dashboard/gestao/cardapio/criar">
                    @if (auth()->user()->is_admin == 1)
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
                            Cadastrar novo produto
                        </button>
                    @endif
                </a>
            </div>
            <div id="desserts" class="div-menus flex-column-center">
                <h1 style="color: white; font-size:25px;">Sobremesas</h1>
                @if ($desserts->isEmpty())
                    <p style="color: white; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Sobremesas'
                        disponíveis no
                        momento</p>
                @endif
                <div class="div-cards-menu-plates">
                    @foreach ($desserts as $dessert)
                        @if ($dessert->typeFood == 'dessert')
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-dash" src="/img/{{ $dessert->image }}" alt="Minha Figura">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $dessert->name }}</h5>
                                    <h5 class="card-title">Preço: R$ {{ number_format($dessert->price, 2) }}</h5>

                                    <p class="card-text">{{ $dessert->description }}</p>
                                    @if (auth()->user()->is_admin == 1)
                                        <form action="{{ route('dashboard.menu.deleteProduct', $dessert->id) }}"
                                            method="post" class="ms-2">

                                            <a href="{{ route('dashboard.menu.edit', $dessert->id) }}"
                                                class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="#" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg>
                                            </button>

                                        </form>
                                    @endif
                                </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="drink" class="div-menus flex-column-center">
                <h1 style="color: white; font-size:25px;">Bebidas</h1>
                @if ($drinks->isEmpty())
                    <p style="color: white; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Bebidas'
                        disponíveis no
                        momento</p>
                @endif
                <div class="div-cards-menu-plates">
                    @foreach ($drinks as $drink)
                        @if ($drink->typeFood == 'drink')
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-dash" src="/img/{{ $drink->image }}" alt="Minha Figura">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $drink->name }}</h5>
                                    <h5 class="card-title">Preço: R$ {{ number_format($drink->price, 2) }}</h5>

                                    <p class="card-text">{{ $drink->description }}</p>
                                    @if (auth()->user()->is_admin == 1)
                                        <form action="{{ route('dashboard.menu.deleteProduct', $drink->id) }}"
                                            method="post" class="ms-2">

                                            <a href="{{ route('dashboard.menu.edit', $drink->id) }}"
                                                class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="#" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="plate" class="div-menus flex-column-center">
                <h1 style="color: white; font-size:25px;">Pratos</h1>
                @if ($plates->isEmpty())
                    <p style="color: white; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Pratos'
                        disponíveis no momento</p>
                @endif
                <div class="div-cards-menu-plates">
                    @foreach ($plates as $plate)
                        @if ($plate->typeFood == 'plate')
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-dash" src="/img/{{ $plate->image }}" alt="Minha Figura">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $plate->name }}</h5>
                                    <h5 class="card-title">Preço: R$ {{ number_format($plate->price, 2) }}</h5>

                                    <p class="card-text">{{ $plate->description }}</p>
                                    @if (auth()->user()->is_admin == 1)
                                        <form action="{{ route('dashboard.menu.deleteProduct', $plate->id) }}"
                                            method="post" class="ms-2">

                                            <a href="{{ route('dashboard.menu.edit', $plate->id) }}"
                                                class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" href="#" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div id="serving" class="div-menus flex-column-center">
                <h1 style="color: white; font-size:25px;">Porções</h1>
                @if ($servings->isEmpty())
                    <p style="color: white; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Porções'
                        disponíveis no momento</p>
                @endif
                <div class="div-cards-menu-plates">
                    @foreach ($servings as $serving)
                        @if ($serving->typeFood == 'serving')
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-dash" src="/img/{{ $serving->image }}" alt="Minha Figura">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $serving->name }} </h5>
                                    <h5 class="card-title">Preço: R$ {{ number_format($serving->price, 2) }}</h5>
                                    <p class="card-text">{{ $serving->description }}</p>
                                    @if (auth()->user()->is_admin == 1)
                                        <form action="{{ route('dashboard.menu.deleteProduct', $serving->id) }}"
                                            method="post" class="ms-2">

                                            <a href="{{ route('dashboard.menu.edit', $serving->id) }}"
                                                class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>

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
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </section>
    </main>
</x-layout>
