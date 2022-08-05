<div>
    <form>
        <label>
            <strong class="block">Name</strong>
            <input wire:model="name" type="text">
        </label>

        <label>
            <strong class="block">Description</strong>
            <input type="text">
        </label>

        <label>
            <strong class="block">Brand</strong>
            <select>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>

            <p>Don't see your brand?</p> 

            <!-- Make this into a component. It's used in two places -->
            <!-- I think it should take a 'prompt' and also a component into the slot -->
            <div x-data="{ open: false }">
                <div class="cursor-pointer text-emerald-500 mb-2" @click="open = !open">Add a brand</div>

                <div x-show="open">
                    <div class="bg-slate-100 p-4">
                        <livewire:form.add-a-brand/>
                    </div>
                </div>
            </div>
        </label>

        <label>
            <strong class="block">Image (or URL)</strong>
            <input type="text">
            Add another?
        </label>
    </form>
</div>
