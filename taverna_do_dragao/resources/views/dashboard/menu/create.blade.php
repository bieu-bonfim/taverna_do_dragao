<x-layout title="Dashboard">
    <main class="main-dash">
        <x-dashboard></x-dashboard>
        <section class="section-dash">
            <div class="manage-dash">
                <h1 class="h1-dash">Criar produto do cardápio</h1>
                <a href={{ url()->previous() }} class="btn btn-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Voltar
                </a>
            </div>
            <form class="form-dash row g-3" action="/dashboard/gestao/cardapio/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-items-dash col-md-2">
                    <label for="name" class="form-label label-dashboard">Nome do produto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="description" class="form-label label-dashboard">Descrição do produto</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="price" class="form-label label-dashboard">Preço do produto</label>
                    <input step="any" type="number" placeholder="R$ 0,00" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="totalQuantity" class="form-label label-dashboard">Quantidade total do produto</label>
                    <input type="number" class="form-control" id="totalQuantity" name="totalQuantity" required>
                </div>
                <div class="form-items-dash col-md-2">
                    <label for="image" class="form-label label-dashboard">Quantidade total do produto</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/jpg, image/png, image/jpeg">
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
