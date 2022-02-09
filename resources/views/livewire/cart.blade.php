<div>

  <!-- alert remove -->
  <div
    class="absolute top-40 right-2/4 translate-x-2/4 w-128 z-0 text-base list-none bg-green-100 rounded-lg py-4 px-5 transition-all ease-in duration-75" x-data="{ show: @entangle('showAlert') }" x-show="show" x-transition:enter="-top-16">
    <div class="flex items-center justify-between">
      <div class="flex items-center">
        <div class="mr-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
        </div>
        <div>
          <span class="text-green-800">Item Removed from Your Cart</span>
        </div>
      </div>
      <div @click="show = !show">
        <button type="button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-800" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="mt-12">
    <div class="container mx-auto">
      <div class="mb-4">
        <span class="text-3xl font-bold">Your Cart</span>
      </div>
      <div class="grid grid-cols-12">

        <!-- card cart -->
        <div class="grid grid-cols-8 col-span-8">
          <div class="col-span-8">
            @forelse ($userProducts as $userProduct)
              <x-card-cart merchant="{{ $userProduct->merchant_name }}" name="{{ $userProduct->product_name }}"
                price="{{ $userProduct->price }}" quantity="{{ $userProduct->quantity }}"
                slug="{{ $userProduct->slug }}" />
            @empty
              <h1>Empty</h1>
            @endforelse
          </div>
        </div>

        <!-- summary card -->
        <div class="col-span-4 ml-12">

          <!-- shipping card -->
          <div class="border border-slate-200 rounded-lg px-5 pt-4 pb-6">
            <div>
              <div class="flex items-center text-complement">
                <span class="text-xl font-bold mr-2">Estimate Shipping & Tax</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>

              <!-- country dropdown -->
              <div class="mt-4">
                <div>
                  <select class="w-full rounded font-bold">
                    <option>Indonesia</option>
                  </select>
                </div>
              </div>

              <!-- postal code form -->
              <div class="mt-4">
                <div class="flex items-center justify-between">
                  <div class="w-fit">
                    <span class="font-bold">Zip Code</span>
                  </div>
                  <div class="w-4/5">
                    <input class="w-full no-spinner rounded" type="number" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- summary card -->
          <div class="mt-4">
            <div class="border border-slate-200 rounded-lg px-5 py-4">
              <div>
                <div>
                  <span class="text-xl font-bold">Summary</span>
                </div>
              </div>
              <div class="mt-4">
                <div class="mb-4">

                  <!-- subtotal -->
                  <div class="mb-2 flex justify-between items-center">
                    <span class="text-complement">Subtotal ({{ $totalItem }} item):</span>
                    <span class="text-complement">$ {{ number_format($subtotal, 0, ',') }}</span>
                  </div>

                  <!-- shipping -->
                  <div class="mb-2 flex justify-between items-center">
                    <span class="text-complement">Shipping:</span>
                    <span class="text-complement">$ {{ number_format($shipping, 0, ',') }}</span>
                  </div>

                  <!-- tax -->
                  <div class="flex justify-between items-center">
                    <span class="text-complement">Tax:</span>
                    <span class="text-complement">$ {{ number_format($tax, 0, ',') }}</span>
                  </div>
                </div>

                <!-- total -->
                <div class="border border-t-2 border-x-0 border-b-0 pt-4">
                  <div class="flex justify-between items-center">
                    <span class="font-bold">Total</span>
                    <span class="font-bold">$ {{ number_format($total, 0, ',') }}</span>
                  </div>
                </div>
              </div>

              <!-- checkout btn -->
              <div class="mt-4">
                <div>
                  <a class="bg-secondary w-full inline-block text-center py-2 rounded text-white font-semibold"
                    href="#">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
