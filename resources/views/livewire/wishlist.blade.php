<div>
  <div class="mt-12">
    <div>
      <h1>Wishlist</h1>
    </div>
    <div>
      <div class="flex flex-wrap">
        @forelse ($wishlists as $wishlist)
          <a class="mr-6" href="">
            <div>
              <img class="border border-gray-300 rounded-lg h-62 w-62 object-fill"
                src="https://cdn.lumen.id/commerce/digimap/file/84417e65-4d7e-4762-86b9-87dbe7a75cf8/PDP-iPhone-13-Pink-1-medium.jpeg" />
            </div>

            <!-- card body -->
            <div class="text-center mt-2">
              <div>
                <span class="text-gray-400">{{ $wishlist->category_name }}</span>
              </div>
              <div>
                <span class="font-bold">{{ $wishlist->product_name }}</span>
              </div>
              <div>
                <button type="button">Add to Cart</button>
              </div>
            </div>
          </a>
        @empty
        @endforelse
      </div>
    </div>
  </div>
</div>
