<x-layout title="Menu">
    <a href="/menu/newItem" class="btn btn-dark mb-2">novo item</a>
    <x-menu-type-food />

    <ul class="list-group">
        <x-menu-items-list :items="$items" />
    </ul>
</x-layout>
