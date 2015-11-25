<ul>
    @foreach($menu as $item)
    <a href="/{{ $item->url }}">
        <li>{{ $item->name }}</li>
    </a>
    @endforeach
</ul>