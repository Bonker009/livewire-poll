<div class="bg-gray-100 p-4 rounded-lg">
    <form wire:submit.prevent="createPoll">
        <label class="text-xl text-gray-800">Poll Title</label>

        <input type="text" wire:model="title" class="input" />

        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4 mt-4">
            <button class="btn btn-primary" wire:click.prevent="addOption">Add Option</button>
        </div>

        <div>
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    <label class="text-lg text-gray-800">Option {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model="options.{{ $index }}" class="input" />
                        <button class="btn btn-danger"
                            wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Create Poll</button>
    </form>
</div>
