<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Editar produto '{{ $product->name }}' do cardápio</h1>
                <a href="{{ route('dashboard.menu.index') }}" >
                    <button class="btn btn-light">
                        Voltar
                    </button>
                </a>
            </div>
            <form class="form-dash row g-3"   action="{{ route('dashboard.menu.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-items-dash col-md-2">
                    <label for="name" class="form-label label-dashboard">Nome do produto</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="description" class="form-label label-dashboard">Descrição do produto</label>
                    <input type="textarea" class="form-control" id="description" name="description" value="{{$product->description}}"  required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="price" class="form-label label-dashboard">Preço do produto</label>
                    <input step="any" type="number" placeholder="R$ 0,00" class="form-control" id="price" name="price" value="{{$product->price}}"  required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="totalQuantity" class="form-label label-dashboard">Quantidade total do produto</label>
                    <input type="number" class="form-control" id="totalQuantity" name="totalQuantity" value="{{$product->totalQuantity}}" required>
                </div>
                {{ $product->image }}
                <div class="form-items-dash col-md-2">
                    <label for="image" class="form-label label-dashboard">Imagem do produto</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/jpg, image/png, image/jpeg">
                </div>
                <div class="form-items-dash col-md-2">
                    <label class="label-dashboard" for="typeFood">Tipo do produto:</label>
                    <select id="typeFood" name="typeFood" class="form-select" required>
                        <option value="drink" @selected($product->typeFood == 'drink')>Bebida</option>
                        <option value="dessert" @selected($product->typeFood == 'dessert')>Sobremesa</option>
                        <option value="plate" @selected($product->typeFood == 'plate')>Prato</option>
                        <option value="serving" @selected($product->typeFood == 'serving')>Porção</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Entrar</button>
            </form>

        </section>
    </main>
</x-layout>
