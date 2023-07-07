<div class="flex">
    @foreach ($decks as $deck)
        <x-deck :deck="$deck"/>
    @endforeach
</div>
