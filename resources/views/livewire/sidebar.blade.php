<aside class="border p-5">
    <h2 class="font-bold">Brands</h2>
    @foreach ($brands as $brand)
        <div class="border p-2 mb-2 cursor-pointer">
            {{ $brand->name }}
        </div>
    @endforeach
</aside>
