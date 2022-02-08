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
    <input class="text-sm no-spinner h-9 border border-slate-200 text-center w-16 focus:border-slate-200 focus:ring-0"
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
