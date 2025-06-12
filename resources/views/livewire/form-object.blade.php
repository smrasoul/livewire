<div>
    <section class="bg-white ">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 ">Contact Us</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500  sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
            @if(session('success'))
                <span class="text-green-500 text-xs">{{ session('success') }}</span>
            @endif
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                    <input wire:model="form.email" type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5   " placeholder="name@flowbite.com" required>
                    @error('form.email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
                    <input wire:model="form.subject" type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500   " placeholder="Let us know how we can help you" required>
                    @error('form.subject')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
                    <textarea wire:model="form.message" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500    " placeholder="Leave a comment..."></textarea>
                    @error('form.message')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <button wire:loading.attr="disabled" wire:click.prevent="create" type="submit" class="py-3 px-5 text-sm font-medium text-center text-gray-900 rounded-lg bg-gray-300 sm:w-fit hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-primary-300   ">Send message</button>
                <div wire:loading>
                      <span class="text-green-700">Sending...</span>
                </div>
            </form>
        </div>
    </section>
</div>
