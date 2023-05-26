<main class="my-7">
    <div class="container mx-auto">
        <div class="flex justify-center my-6">
            <div class="flex flex-col w-full p-8 text-green-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                <h3 class="text-3xl font-bold">Checkout</h3>
                <h1 class=" text-red-600 text-2xl font-bold">Bedankt voor uw bestelling bij StonksPizza!:)</h1>

                  <img class="img_pizza h-[200px] w-[200px]" src="https://www.panarottis.com/media/2005/untitled-design-6-3.png?anchor=center&mode=crop&width=637&height=639" />


              <div class="relative overflow-auto scrollbar-hidden-y rounded-lg h-[30rem]">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="px-6 py-3">Naam</th>
                      <th scope="col" class="px-6 py-3">Hoeveel</th>
                      <th scope="col" class="px-6 py-3">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                     @foreach ($cartitems as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 mb-2 text-purple-600 font-bold">
                            {{ $item->product->name }}
                        </td>
                      <td class="px-6 py-4 mb-2 font-bold">
                          x <span class="text-purple-600">
                            {{ $item->quantity }}
                          </span>
                      </td>
                      <td class=" px-6 py-4">
                          €{{ $item->product->price * $item->quantity }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="relative right-[80%] left-0 top-7 text-lg font-bold">
                 
                Totaal:<strong> € {{ $this->total }}</strong>
                </div>
                <div>

                </div>
            </div>
          </div>
    </div>
</main>