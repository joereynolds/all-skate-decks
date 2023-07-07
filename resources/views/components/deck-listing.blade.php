<div class="deck-listing ml-5 flex space-x-5">
    @forelse ($decks as $deck)
        <x-deck :deck="$deck"/>
    @empty
        <p>
            No decks for the brand
            <strong>{{ $context['brand'] }}</strong>
        </p>
    @endforelse
</div>
