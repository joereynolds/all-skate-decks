<div>
    <div>
        @if (!empty($imageUrl))
            <img src="{{ $imageUrl }}" class="max-w-96">
        @else
            <img src="{{ $deck->variations->first()->image_url }}" class="max-w-96">
        @endif
    </div>

    <div>
        <p>
            Brand: <a href="#">{{ $deck->brand->name }}</a>
        </p>
        <p>
            {{ $deck->description }}
        </p>
        <div>
            Variations: 
            @foreach ($deck->variations as $variation)
                <button 
                    wire:click="$set('imageUrl', '{{ $variation->image_url }}')"
                    class="inline-block border p-2"
                >
                    {{ $variation->name }}
                </button> 
            @endforeach
        </div>
    </div>

</div>
