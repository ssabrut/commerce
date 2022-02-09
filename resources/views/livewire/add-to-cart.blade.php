<div>

  <!-- flyout -->
  <div class="absolute top-[120px] right-48 w-96 z-10 text-base list-none bg-white rounded-b-lg shadow-md py-4 px-5"
    x-data="{ show: @entangle('showFlyout') }" x-show="show" x-transition:enter.origin.top>
    <div>
      <div>

        <!-- flyout header -->
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mr-2" viewBox="0 0 20 20"
              fill="currentColor">
              <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd" />
            </svg>
            <span class="font-bold">Added to Your Cart</span>
          </div>
          <div>
            <button @click="show = !show">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 font-light" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>

        <!-- flyout body -->
        <div class="mt-4">
          <div class="flex">
            <div class="w-24 h-24 rounded overflow-hidden border border-slate-200">
              <img
                src="https://cdn.lumen.id/commerce/digimap/file/84417e65-4d7e-4762-86b9-87dbe7a75cf8/PDP-iPhone-13-Pink-1-medium.jpeg" />
            </div>
            <div class="ml-4">
              <div>
                <span class="font-semibold">{{ $product->name }}</span>
              </div>
              <div>
                <span class="font-semibold">$ {{ number_format($product->price, 0, ',') }}</span>
              </div>
            </div>
          </div>
        </div>

        <!-- flyout footer -->
        <div class="mt-8 pb-4">
          <div class="flex justify-between items-center">
            <div class="">
              <a class="border border-secondary px-9 py-2 text-secondary font-bold rounded" href="{{ route('cart.index') }}">View Cart</a>
            </div>
            <div>
              <button class="bg-secondary px-5 py-2 border-0 font-bold rounded text-white" @click="show = !show">Continue
                Shopping</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="flex items-center mb-4">

    <!-- set quantity btn -->
    <div class="flex items-center w-fit mr-4">

      <!-- minus btn -->
      <div wire:click="decrement">
        <button class="bg-gray-200 p-2 focus:ring-0 focus:border-0" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>

      <!-- input text -->
      <div>
        <input
          class="text-sm no-spinner h-9 border border-slate-200 text-center w-16 focus:border-slate-200 focus:ring-0 add-to-cart"
          type="number" value="{{ $quantity }}" id="quantity" />
      </div>

      <!-- plus btn -->
      <div wire:click="increment">
        <button class="bg-gray-200 p-2 focus:ring-0 focus:border-0" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>


    <!-- add to cart btn -->
    <div class="mr-4" x-data="{ show: @entangle('showFlyout') }">
      <div @click="show = !show">
        <button class="bg-secondary text-white font-semibold h-9 px-6" wire:click="addToCart">Add
          to
          Cart</button>
      </div>
    </div>

    <!-- wishlist btn -->
    <div>
      <div wire:click="wishlist">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-complement" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
              clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
