<aside class="border p-5">
    <section class="mb-10">
        <h2 class="font-bold">Brands</h2>

        @foreach ($brands as $brand)
            <a  
                class="block border p-2 mb-2 hover:border-emerald-300" 
                href="{{ route('home', ['brands' => $brand->name]) }}">
                {{ $brand->name }}
            </a>
        @endforeach
    </section>

    <section class="mb-10">
        <h2 class="font-bold">Pros</h2>

        <div class="border p-2 mb-2 cursor-pointer">
            Chris Haslam
        </div>
        <div class="border p-2 mb-2 cursor-pointer">
            Corey Duffel
        </div>
    </section>

    <section>
        <h2 class="font-bold">Artists</h2>

        <div class="border p-2 mb-2 cursor-pointer">
            Artist #1
        </div>
        <div class="border p-2 mb-2 cursor-pointer">
            Artist #2
        </div>
    </section>

</aside>
