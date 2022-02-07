<x-app-layout>
  <div class="mt-12">
    <div class="container mx-auto">
      <div>
        <div class="w-fit">
          <div class="mb-2 border border-slate-200 rounded-lg overflow-hidden">
            <img class="w-96 h-96 product-cover" src="{{ $image_paths[0] }}" />
          </div>
          <div class="flex justify-center">
            <div class="product-detail-image max-w-sm">
              @foreach ($image_paths as $image_path)
                <div
                  class="border border-slate-200 rounded-lg overflow-hidden mr-2 cursor-pointer focus:ring-1 focus:ring-secondary focus:outline-none hover:ring-1 hover:ring-secondary">
                  <img class="w-20 h-20 object-cover product-image" src="{{ $image_path }}" />
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div>
        @livewire('add-to-cart', ['slug' => $slug])
      </div>
    </div>
  </div>
</x-app-layout>
