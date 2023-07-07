<div class="brand">
    <a
        hx-get="/brands/{{ $route }}"
        hx-target=".deck-listing"
        class="block border p-2 mb-2 hover:border-emerald-300"
    >
        {{ $name }}
    </a>
</div>
