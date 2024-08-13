<x-layout title="New Item">
    <form action="/menu/storeItem" method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="price" class="form-label">Preço:</label>
            <input type="decimal" id="price" name="price" class="form-control">
            <label for="description" class="form-label">Descrição:</label>
            <input type="text" id="description" name="description" class="form-control">
            <label for="typeFood" class="form-label">Tipo de comida:</label>
            <select id="typeFood" name="typeFood" class="form-select">
                <option value="" disabled selected>Escolha um tipo de comida</option>
                <option value="Porções">Porções</option>
                <option value="Pratos">Pratos</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Sobremesas">Sobremesas</option>
            </select>
        </div>
        <button class="btn btn-primary mt-2">Salvar</button>
    </form>
</x-layout>
