<div class="mt-5">
    <form wire:submit="save">
        <input type="text" class="w-full border mb-3" placeholder="Name" wire:model='name'>
        @error('name')
        <div class="mb-3 text-red-500">
            <small>{{ $message }}</small>
        </div>
        @enderror
        <input type="text" class="w-full border mb-3" placeholder="name@gmail.com" wire:model='email'>
        @error('email')
        <div class="mb-3 text-red-500">
            <small>{{ $message }}</small>
        </div>
        @enderror
        <button class="border py-1 px-4 bg-green-700 text-white rounded mb-3">Submit</button>
    </form>

    <div class="mt-5">
        <a href="/users" wire:navigate class="text-blue-500">&laquo; Go Back</a>
    </div>
</div>
