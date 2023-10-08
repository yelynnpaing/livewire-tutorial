<div class="mt-5 border rounded p-5">
    <h5 class="text-xl mb-3 font-bold">{{ $user->name }}</h5>
    <p class="text-gray-800 mb-3">{{ $user->email }}</p>
    <div class="mb-3">
        <small class="text-gray-500 mb-3">{{ $user->created_at->diffForHumans() }}</small>
    </div>
    <a href="/users" class="text-blue-600" wire:navigate>
        &laquo; Go Back
    </a>
</div>
