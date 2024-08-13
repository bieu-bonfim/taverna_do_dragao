<x-layout title="New Item">
    <form action="/menu/storeItem" method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control">
            <label for="price" class="form-label">Preço:</label>
            <input type="decimal" id="price" name="price" class="form-control">
        </div>
        <button class="btn btn-primary mt-2">Salvar</button>
    </form>
</x-layout>
