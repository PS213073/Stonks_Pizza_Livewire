{{-- <div>
    @include('layouts.flash-message')
    <main class="my-2">
        <div class="container mx-auto px-6">
            <h3 class="text-white text-2xl font-medium">Pizzas</h3>
            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 mt-6">
                @foreach($products as $product)
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden bg-white">
                    <div class="flex items-end justify-end h-56 w-full bg-cover"
                        style="background-image: url('{{ $product->image }}')">
                        <button
                            class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
                            wire:click="addToCart({{ $product->id }})">
                            <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        <input id="FProduct-{{ $product->id }}" type="hidden" value="{{ $product->price }}" name="price">
                        <span class="text-black">€</span>
                        <span id="Product-{{ $product->id }}" class="mt-2 text-gray-500">{{ $product->price }}</span></br>
                        <select class="text-gray-700 uppercase rounded"
                            onchange="updatePrice('Product-{{ $product->id }}', value, '{{ $product->price }} ')"
                            name="size" class="w-56 mb-2">
                            <option value="">Select Size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</div> --}}


<div class="container px-12 py-8 mx-auto">
    <h3 class="text-2xl font-bold text-white">Onze Pizza's</h3>
    <div class="h-1 bg-blue-800 w-36"></div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($products as $product)
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
            <img src="{{ url($product->image) }}" alt="" class="w-full max-h-60">
            <div class="flex items-end justify-end w-full bg-cover">
            </div>
            <div class="px-5 py-3">
                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                <span>€</span>
                <span id="Product-{{ $product->id }}" class="mt-2 text-gray-500">{{ $product->price }}</span>
                <form>
                    @csrf
                    <input type="hidden" value="{{ $product->id }}" name="id">
                    <input type="hidden" value="{{ $product->name }}" name="name">
                    <input type="hidden" value="{{ $product->image }}" name="image">
                    <input id="FProduct-{{ $product->id }}"  type="hidden" value="{{ $product->price }}" name="price">
                    <select onchange="updatePrice('Product-{{ $product->id }}', value, '{{ $product->price }} ')" name="size" id="" class="w-56 mb-2">
                        <option value="medium">Medium</option>
                        <option  value="small">Small</option>
                        <option value="large">Large</option>
                    </select></br>
                    {{-- <span class="underline">Extra's :</span></br> --}}
                    {{-- @foreach ($toppings as $topping )
                    <input id="T-{{ $topping->id }}" type="checkbox" value="{{ $topping->price }}"><label> 
                        {{ $topping->name }} 
                        € {{ $topping->price }}</label></br>

                    @endforeach --}}
                    {{-- <input type="number" value="1" min="1" name="quantity" class="w-16 rounded"> --}}
                    <button wire:click="addToCart({{ $product->id }})" class="my-2 px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>