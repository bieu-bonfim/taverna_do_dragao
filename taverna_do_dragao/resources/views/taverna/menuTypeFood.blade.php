<x-layout title="Menu">
    <a href="/menu/newItem" class="btn btn-dark mb-2">novo item</a>
    <x-menu-type-food />
    <h2>{{$typeFood}}</h2>
    @if($items->isEmpty())
        <p>Nenhum item encontrado para o tipo de comida: {{ $typeFood }}.</p>
    @else
        <x-menu-items-list :items="$items" />
    @endif
</x-layout>
