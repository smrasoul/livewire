<div wire:poll.keep-alive class="mt-10 p-10 mx-auto sm:max-w-full sm:w-full shadow border-teal-500 border-t-2">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-700 bg-white">
            <thead class="text-xs text-gray-800 uppercase bg-gray-100">
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Joined at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="bg-white border-b border-gray-300">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4 text-gray-800">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4 text-gray-800">
                        {{ $user->created_at }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-5">
        {{ $users->links('pagination::simple-tailwind') }}
    </div>
</div>
