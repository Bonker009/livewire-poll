<div class="bg-emerald-600 p-4 rounded-lg  ">
    @forelse ($polls as $poll)
        <div class="mb-6">
            <h3 class="text-2xl font-bold text-slate-100 mb-2 text-center uppercase">
                {{ $poll->title }}
            </h3>
            <div class="bg-white p-4 rounded-lg shadow-md">
                @foreach ($poll->options as $option)
                    <div class="flex items-center mb-2">
                        <button class="btn btn-primary mr-2" wire:click="vote({{ $option->id }})">Vote</button>
                        <span class="text-gray-700">{{ $option->name }}</span>
                        <span class="text-gray-500 ml-2">({{ $option->votes->count() }})</span>
                    </div>
                @endforeach
            </div>
        </div>
    @empty
        <div class="text-gray-500 text-center">
            No polls available, me hearties!
        </div>
    @endforelse
</div>
