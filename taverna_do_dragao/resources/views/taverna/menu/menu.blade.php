<x-layout title="Cardápio">
    <section class="container-section-menu">
        <div class="flex-row-center container-div-middle">
            <img class="img-sword" src="/img/left-sword.png" alt="Minha Figura">
            <h1>Cardápio</h1>
            <img class="img-sword" src="/img/right-sword.png" alt="Minha Figura">
        </div>
        <div>
            <ul class="ul-menu-list">
                <li><a href="#plates">Pratos</a></li>
                <li><a href="#serving">Porções</a></li>
                <li><a href="#drinks">Bebidas</a></li>
                <li><a href="#desserts">Sobremesas</a></li>
            </ul>
        </div>
        <div id="plates" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Pratos</h1>
            @if ($plates->isEmpty())
                <p style="color: black; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Pratos'
                    disponíveis no momento</p>
            @endif

            <div class="div-cards-menu-plates">
                @foreach ($plates as $plate)
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/img/{{ $plate->image }}" alt="Minha Figura">
                        <div class="card-body">
                            <h5 class="card-title">{{ $plate->name }}</h5>
                            <h5 class="card-title">R${{ number_format($plate->price, 2) }}</h5>
                            <p class="card-text">{{ $plate->description }}</p>
                            <a href="{{ route('cart.add', $plate->id) }}" class="btn btn-dark">Adicionar ao carrinho</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="serving" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Porções</h1>
            @if ($servings->isEmpty())
                <p style="color: black; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Porções'
                    disponíveis no momento</p>
            @endif
            <div class="div-cards-menu-plates">
                @foreach ($servings as $serving)
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/img/{{ $serving->image }}" alt="Minha Figura">
                        <div class="card-body">
                            <h5 class="card-title">{{ $serving->name }}</h5>
                            <h5>R${{ number_format($serving->price, 2) }}</h5>
                            <p class="card-text">{{ $serving->description }}</p>
                            <a href="{{ route('cart.add', $serving->id) }}" class="btn btn-dark">Adicionar ao carrinho</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="drinks" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Bebidas</h1>
            @if ($drinks->isEmpty())
                <p style="color: black; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Bebidas'
                    disponíveis no momento</p>
            @endif
            <div class="div-cards-menu-plates">
                @foreach ($drinks as $drink)
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/img/{{ $drink->image }}" alt="Minha Figura">
                        <div class="card-body">
                            <h5 class="card-title">{{ $drink->name }}</h5>
                            <h5 class="card-title">R${{ number_format($drink->price, 2) }}</h5>
                            <p class="card-text">{{ $drink->description }}</p>
                            <a href="{{ route('cart.add', $plate->id) }}" class="btn btn-dark">Adicionar ao carrinho</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="desserts" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Sobremesas</h1>
            @if ($desserts->isEmpty())
                <p style="color: black; font-size:20px; margin-top:15px;">Não há produtos do tipo 'Sobremesas'
                    disponíveis no momento</p>
            @endif
            <div class="div-cards-menu-plates">
                @foreach ($desserts as $dessert)
                    <div class="card" style="width: 19rem;">
                        <img class="card-img-top" src="/img/{{ $dessert->image }}" alt="Minha Figura">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dessert->name }}</h5>
                            <h5 class="card-title">R${{ number_format($dessert->price, 2) }}</h5>
                            <p class="card-text">{{ $dessert->description }}</p>
                            <a href="{{ route('cart.add', $plate->id) }}" class="btn btn-dark">Adicionar ao carrinho</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
