<div>
    @foreach ($matches['brands'] as $brand)
        <p>
            brand:
            {!! Str::highlight($searchTerm, $brand->name) !!}
        </p>
    @endforeach
</div>
