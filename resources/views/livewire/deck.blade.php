    <div>
        <img src="https://media.titus.de/media/image/22/b3/bd/enjoi-skateboard-decks-whitey-panda-logo-wide-r7-white-vorderansicht-0115843_600x600.jpg">
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
                <a 
                    href="#" 
                    class="inline-block border p-2"
                >
                    {{ $variation->name }}
                </a> 
            @endforeach
        </div>
    </div>

</div>
