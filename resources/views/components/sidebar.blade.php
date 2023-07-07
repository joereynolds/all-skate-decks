<aside class="border p-5">
    <section class="mb-10">
        <h2 class="font-bold">Brands</h2>

        <div class="brands">
            <x-brand-button name="Show All" route=""/>

            @foreach ($firstFewBrands as $brand)
                <x-brand-button :name="$brand->name" :route="$brand->name"/>
            @endforeach

            <div x-data="{ open: false }">

                <div x-show="open">
                    @foreach ($remainingBrands as $brand)
                        <x-brand-button :name="$brand->name" :route="$brand->name"/>
                    @endforeach
                </div>

                <div
                    x-text="open ? 'Show Less' : 'Show More'"
                    class="cursor-pointer text-emerald-500 mb-2"
                    @click="open = !open">

                </div>
            </div>
        </div>

        <p>Don't see your brand?</p>
        <div x-data="{ open: false }">
            <div class="text-emerald-500 mb-2" @click="open = !open">Add a brand</div>

            <div x-show="open">
                <div class="bg-slate-100 p-4">
                    <x-add-a-brand-form/>
                </div>
            </div>
        </div>
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
