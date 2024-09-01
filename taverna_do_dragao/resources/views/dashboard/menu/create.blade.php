<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Criar produto do cardápio</h1>
                <a href="/dashboard/gestao-comandas">
                    <button class="btn btn-light">
                        Ver todos produtos
                    </button>
                </a>
            </div>
            <form class="form-dash row g-3" action="/dashboard/gestao/cardapio/create" method="post">
                @csrf
                <div class="form-items-dash col-md-2">
                    <label for="name" class="form-label label-dashboard">Nome do produto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="description" class="form-label label-dashboard">Descrição do produto</label>
                    <input type="textarea" class="form-control" id="description" name="description" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="price" class="form-label label-dashboard">Preço do produto</label>
                    <input step="any" type="number" placeholder="R$ 0,00" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="totalQuantity" class="form-label label-dashboard">Quantidade total do produto</label>
                    <input type="number" class="form-control" id="totalQuantity" name="totalQuantity" required>
                </div>
                {{-- <div class="form-items-dash col-md-2">
                    <label for="price" class="form-label label-dashboard">Imagem do produto</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div> --}}
                <div class="form-items-dash col-md-2">
                    <label class="label-dashboard" for="typeFood">Tipo do produto:</label>
                    <select id="typeFood" name="typeFood" class="form-select">
                        <option value="drink">Bebida</option>
                        <option value="dessert">Sobremesa</option>
                        <option value="plate">Prato</option>
                        <option value="serving">Porção</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark">Entrar</button>
            </form>

        </section>
    </main>
</x-layout>
