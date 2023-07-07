<div class="deck-listing flex">
    @forelse ($decks as $deck)
        <x-deck :deck="$deck"/>
    @empty
        <p>
            No decks for the brand
            <strong>{{ $context['brand'] }}</strong>
        </p>
    @endforelse
</div>
