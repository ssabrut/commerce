<div>
  <div class="mt-12">
    <div class="container mx-auto">
      <div class="mb-4">
        <span class="text-3xl font-bold">Your Cart</span>
      </div>
      <div class="grid grid-cols-12">

        <!-- card cart -->
        <div class="grid grid-cols-8 col-span-8">
          <div class="col-span-8">
            @foreach ($userProducts as $userProduct)
              <x-card-cart merchant="{{ $userProduct->merchant_name }}" name="{{ $userProduct->product_name }}"
                price="{{ $userProduct->price }}" quantity="{{ $userProduct->quantity }}"
                slug="{{ $userProduct->slug }}" />
            @endforeach
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
                  <a class="bg-secondary w-full inline-block text-center py-2 rounded text-white font-semibold" href="#">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
