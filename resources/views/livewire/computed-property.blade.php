
<div class="p-5 mx-auto max-w-md">
    <h2 class="text-2xl mb-3">Users List</h2>
    <input
        {{--            wire:model.live="search"--}}
        wire:model.live.debounce.500ms="search"
        {{--               wire:model.live.blur="search"--}}
        {{--               wire:model.throttle.200ms="search"--}}
        type="text" placeholder="Search..." class="ring-1 ring-inset ring-gray-300 bg-gray-100 text-gray-900 text-sm rounded">
    <button wire:click="update" type="button" class="block mt-3 px-4 py-2 bg-teal-500 text-white rounded">Search</button>
    <div role="status">
        <div class="my-3 p-4 border border-gray-200 divide-y divide-gray-200 rounded shadow">
            @foreach ($this->users as $user)
                <div wire:key="{{ $user->id }}" class="flex items-center justify-between">
                    <div class="">
                        <div class="text-gray-900 rounded-full w-24 mb-2">
                            {{ $user->name }}
                        </div>
                        <div class="text-xs text-gray-600 w-32 rounded-full ">
                            {{ $user->email }}
                        </div>
                    </div>
                    <button class="text-white bg-teal-500 px-3 py-1 rounded-full">View</button>
                </div>
            @endforeach
        </div>
    </div>
</div>

