<h1>FAQ</h1>

@foreach($categories as $category)

    <h2>{{ $category->name }}</h2>

    @foreach($category->items as $item)

        <p>
            <strong>{{ $item->question }}</strong><br>
            {{ $item->answer }}
        </p>

    @endforeach

@endforeach