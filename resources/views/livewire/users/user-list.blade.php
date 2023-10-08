
    <div class="">
        <ul class="mt-5">
            @foreach ($users as $user)
                <li class="mb-3 border-b flex justify-between" wire:key="{{ $user->id }}">
                    <a href="/users/view/{{ $user->id }}" class="text-xl font-bold mb-3 text-blue-500 py-2"
                    wire:navigate>
                        {{ $user->name }}
                    </a>
                    <button wire:click="delete({{ $user->id }})">
                        <div class="text-red-500 text-xl font-bold">&times;</div>
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

