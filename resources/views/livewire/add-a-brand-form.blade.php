<div>
    <form wire:submit.prevent="submit" method="POST">
        <label class="block mb-2">
            <strong class="block">Brand</strong>
            <input wire:model="brand" class="border p-2" name="brand"/>
        </label>

        <input class="border p-2 bg-emerald-500 text-white cursor-pointer" type="submit" value="Add brand"/>
    </form>

    @error('brand')
        <p class="text-red-500 mt-2">{{ $message }}</p>
    @enderror

    @if (session()->has('message'))
        <p class="mt-2">{{ session('message') }}</p>
    @endif
</div>
