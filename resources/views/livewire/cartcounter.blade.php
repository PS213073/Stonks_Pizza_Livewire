<div>
    <div class="bg-blue-800 px-4 py-[8px] rounded-lg">
        <a href="{{ url('/shoppingcart') }}" class="flex items-center text-white">
            {{ __('Winkelmaandje') }}
            <svg class="w-5 h-5 mx-1 text-white " fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
           <span class="text-red-700"> {{ $total }}</span> 
        </a>
        </div>


    {{-- <a href="{{ url('/shoppingcart') }}" class="text-sm text-gray-700 dark:text-gray-500 mr-2"><svg
            class="h-5 w-5 inline mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
            </path> <span class="bg-red-700 text-white px-2 rounded-full">
                 {{ $total }}
            </span></a> --}}
</div>