<div>
    <ul class="list-group">
        @foreach ($attributes->get('items') as $item)
            <a href="/menu/item={{$item->id}}" class="btn"><li class="list-group-item">{{$item->name}}</li></a>
        @endforeach
    </ul>
</div>