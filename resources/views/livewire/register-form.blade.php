<div class="mt-10 p-5 mx-auto sm:max-w-full sm:w shadow border-teal-500 border-t-2">
    <div class="flex">
        <h2 class="text-center font-semibold text-2x text-gray-800 mb-5">Create New Account</h2>
    </div>
    @if (session('success'))
        <span class="text-green-500 text-xs">{{ session('success') }}</span>
    @endif
    <form wire:submit="create" action="" class="">
        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="name">Name</label>
        <input wire:model="name" type="text" id="name" placeholder="name..."
               class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-sm rounded block w-full p-2">
        @error('name')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="email">Email</label>
        <input wire:model="email" type="email" id="email" placeholder="email..."
               class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-sm rounded block w-full p-2">
        @error('email')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="password">Password</label>
        <input wire:model="password" type="password" id="password" placeholder="password..."
               class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-sm rounded block w-full p-2">
        @error('password')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <label class="mt-3 block text-sm font-medium leading-6 text-gray-900" for="image">Profile picture</label>
        <input wire:model="image" accept="image/png, image/jpeg" type="file" id="image"
               class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-sm rounded block w-full p-2">
        @error('image')
        <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        @if($image)
            <img class="rounded w-10 h-10 mt-5 block" src="{{ $image->temporaryUrl() }}" alt="">
        @endif

{{--        <div wire:loading.delay--}}
{{--             wire:target="create">--}}
{{--             wire:target="image">--}}
{{--            <span>Uploading...</span>--}}
{{--        </div>--}}

{{--        <div wire:loading.delay>--}}
{{--            <span class="text-green-700">Sending...</span>--}}
{{--        </div>--}}

        <button wire:click.prevent="updateList"
                class="block mt-3 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
            Update List
        </button>

        <button wire:loading.class.remove="bg-teal-500 hover:bg-teal-600"
                wire:loading.class="bg-gray-500"
                wire:loading.attr="disabled"
                type="submit"
                class="block mt-3 px-4 py-2 bg-teal-500 text-white font-semibold rounded hover:bg-teal-600">
            Create
        </button>
    </form>
</div>

