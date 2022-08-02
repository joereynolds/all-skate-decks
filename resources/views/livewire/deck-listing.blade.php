<div class="flex">
    @foreach ($decks as $deck)
        <livewire:deck :deck="$deck"/>
    @endforeach
</div>
