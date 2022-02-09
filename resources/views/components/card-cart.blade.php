<div class="border border-y-2 border-x-0 py-5">
  <div class="grid grid-rows-3 grid-cols-8">

    <!-- row 1 -->
    <div class="col-span-full row-span-full">
      <div>
        <div class="flex items-center">
          <div class="w-8 h-8 rounded-full overflow-hidden">
            <img
              src="https://play-lh.googleusercontent.com/fHr2pe1B7n_dvrFX3e-P-BFrsiMJ-nPh4_wn4Yj2vwlINS_Lb4CwK8qKGK8upu5to-RK" />
          </div>
          <div class="ml-2">
            <span>{{ $merchant }}</span>
          </div>
        </div>
      </div>
    </div>

    <!-- row 2 -->
    <div class="col-span-full mt-4">
      <div class="grid grid-cols-8">

        <!-- product iamge -->
        <div class="w-28 h-28 border border-slate-200 rounded-lg overflow-hidden">
          <img
            src="https://cdn.lumen.id/commerce/digimap/file/84417e65-4d7e-4762-86b9-87dbe7a75cf8/PDP-iPhone-13-Pink-1-medium.jpeg" />
        </div>

        <!-- product detail -->
        <div class="col-span-6">
          <div>
            <span>{{ $name }}</span>
          </div>
          <div>
            <span class="text-complement">In Stock</span>
          </div>
        </div>

        <!-- price -->
        <div>
          <div class="flex justify-end mr-4">
            <span class="font-bold">${{ $price }}</span>
          </div>
        </div>
      </div>
    </div>


    <!-- row 3 -->
    <div class="col-span-full mt-4">

      <!-- setting -->
      <div class="flex justify-end items-center">
        <div class="flex mr-8">

          <!-- wishlist btn -->
          <div>
            <button class="mr-8 text-complement font-semibold text-sm flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                  clip-rule="evenodd" />
              </svg>Add to Wishlist</button>
          </div>

          <!-- remove btn -->
          <div x-data="{ show: @entangle('showAlert') }" @click="show = !show">
            <button class="border-l-2 pl-8 text-complement font-semibold flex items-center text-sm"
              wire:click="remove('{{ $slug }}')">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd" />
              </svg>Remove</button>
          </div>
        </div>

        <!-- quantity -->
        <div>
          <div>
            <div class="flex items-center w-fit mr-4">

              <!-- minus btn -->
              <div wire:click="decrement('{{ $slug }}', {{ $quantity }})">
                <button class="bg-gray-200 p-2 focus:ring-0 focus:border-0" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>

              <!-- input text -->
              <div>
                <input
                  class="text-sm no-spinner h-9 border border-slate-200 text-center w-16 focus:border-slate-200 focus:ring-0"
                  type="number" value="{{ $quantity }}" id="quantity" data-slug={{ $slug }} />
              </div>

              <!-- plus btn -->
              <div wire:click="increment('{{ $slug }}', {{ $quantity }})">
                <button class="bg-gray-200 p-2 focus:ring-0 focus:border-0" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                      clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
