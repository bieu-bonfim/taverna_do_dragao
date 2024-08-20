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
          
            <div class="div-cards-menu-plates">
                @foreach ($items as $item)
                    @if($item->typeFood == 'plate')
                        <div class="card" style="width: 19rem;">
                            <img class="card-img-top"  src="{{$item->image}}" alt="Minha Figura">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                                <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="serving" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Porções</h1>
            <div class="div-cards-menu-plates">
                @foreach ($items as $item)
                    @if($item->typeFood == 'serving')
                        <div class="card" style="width: 19rem;">
                            <img class="card-img-top" src="{{$item->image}}" alt="Minha Figura">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                                <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="drinks" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Bebidas</h1>
            <div class="div-cards-menu-plates">
                @foreach ($items as $item)
                    @if($item->typeFood == 'drink')
                        <div class="card" style="width: 19rem;">
                            <img class="card-img-top" src="{{$item->image}}" alt="Minha Figura">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                                <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div id="desserts" class="div-menus flex-column-center">
            <img class="img-shield" src="/img/chef-hat.png" alt="Minha Figura">
            <h1>Sobremesas</h1>
            <div class="div-cards-menu-plates">
                @foreach ($items as $item)
                    @if($item->typeFood == 'dessert')
                        <div class="card" style="width: 19rem;">
                            <img class="card-img-top"  src="{{$item->image}}" alt="Minha Figura">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">{{$item->description}}</p>
                                <a href="#" class="btn btn-dark">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
