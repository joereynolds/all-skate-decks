<div class="deck-listing flex">
    @foreach ($decks as $deck)
        <x-deck :deck="$deck"/>
    @endforeach
</div>
