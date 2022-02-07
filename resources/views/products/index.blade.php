<x-app-layout>
  <div class="mt-12">
    <div class="container mx-auto">
      <div class="grid grid-cols-12 gap-10">

        <!-- product image carousel -->
        <div>
          <div class="product-detail-image h-128 overflow-y-scroll no-scrollbar p-1">
            @foreach ($image_paths as $image_path)
              <div
                class="border border-slate-200 rounded-lg overflow-hidden mr-2 cursor-pointer w-fit mb-2 {{ $loop->first ? 'image-active' : '' }}">
                <img class="w-20 h-20 object-cover product-image" src="{{ $image_path }}" />
              </div>
            @endforeach
          </div>
        </div>

        <!-- product cover -->
        <div class="col-span-4">
          <div class="rounded-lg overflow-hidden">
            <img class="w-128 h-128 product-cover" src="{{ $image_paths[0] }}" />
          </div>
        </div>

        <!-- product detail -->
        <div class="col-span-7">

          <!-- merchant name -->
          <div class="mb-2">
            <div class="flex items-center">
              <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                <img class="w-8 h-8 object-cover"
                  src="{{ $product->merchant->image_path }}" />
              </div>
              <span class="font-bold text-secondary">{{ $product->merchant->name }}</span>
            </div>
          </div>

          <!-- product -->
          <div>
            <div class="mb-2">
              <span class="font-semibold text-4xl">Iphone 13 Pro Max - Rose Gold</span>
            </div>

            <!-- star review -->
            <div class="mb-4">
              <div class="flex items-center">
                <div class="flex items-center">
                  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-ornament" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg></span>
                  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-ornament" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg></span>
                  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-ornament" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg></span>
                  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-ornament" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg></span>
                  <span><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-ornament" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg></span>
                </div>
                <div class="ml-1">
                  <span class="font-bold text-yellow-ornament">5</span>
                </div>
                <div class="ml-2">
                  <span class="font-semibold text-secondary">(1945 reviews)</span>
                </div>
              </div>
            </div>

            <!-- helper section -->
            <div>
              @livewire('add-to-cart', ['slug' => $slug])
            </div>
          </div>

          <!-- product navigation -->
          <div>
            <div class="mb-2">
              <div>
                <span class="text-complement font-semibold text-lg">Description</span>
              </div>
            </div>
            <div>

              <!-- product description -->
              <div>
                <span>{{ $product->description }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
