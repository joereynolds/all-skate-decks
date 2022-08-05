<div>
    <form wire:submit.prevent="submit" method="POST">
        <label class="block mb-2">
            <strong class="block">Brand</strong>
            <input wire:model="brand" class="border p-2" name="brand"/>
        </label>

        @error('brand')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <input class="border p-2 bg-emerald-500 text-white cursor-pointer" type="submit" value="Add brand"/>
    </form>
</div>
