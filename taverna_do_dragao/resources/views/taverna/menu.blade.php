<x-layout title="Menu">
    <a href="/menu" class="btn btn-dark mb-2">Menu</a>
    <ul class="list-group">
        @foreach ($items as $item)
            <li class="list-group-item"><a href="/menu/{{$item}}" class="btn btn-dark mb-2">{{$item}}</a></li>
        @endforeach
    </ul>
</x-layout>
