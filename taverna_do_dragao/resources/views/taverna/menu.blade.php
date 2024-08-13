<x-layout title="Menu">
    <a href="/menu/newItem" class="btn btn-dark mb-2">novo item</a>
    <ul class="list-group">
        @foreach ($items as $item)
            <li class="list-group-item"><a href="/menu/item={{$item->id}}" class="btn btn-dark mb-2">{{$item->name}}</a></li>
        @endforeach
    </ul>
</x-layout>
