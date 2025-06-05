<div>

    <div> {{ $users->count() }}</div>

    @if(session('success'))
        <span class="text-white bg-green-600 rounded mx-2 p-2">
            {{ session('success') }}
        </span>
    @endif

    <form class="p-5" action="">

        <input class="block rounded border border-gray-100 px-3 py-1 mt-2"
               type="text" wire:model="name" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2"
            type="email" wire:model="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror
        <input class="block rounded border border-gray-100 px-3 py-1 mt-2"
            type="password" wire:model="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">
            {{ $message }}
        </span>
        @enderror

        <button wire:click.prevent="createNewUser" class="block rounded px-3 py-1 bg-gray-400 text-white">Create</button>
    </form>

    <div>
        @foreach($users as $user)
            <h1> {{ $user->name }} </h1>
        @endforeach
    </div>

    <div>
        {{--    or in livewire config file    --}}
        {{ $users->links('vendor.livewire.simple-tailwind') }}
    </div>

</div>
