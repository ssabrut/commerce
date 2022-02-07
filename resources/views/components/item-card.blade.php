<a class="mr-6" href="{{ route('products.show', ['merchant' => $merchant, 'product' => $slug]) }}">
  <div>
    <img class="border border-gray-300 rounded-lg h-62 w-62 object-fill"
      src="https://cdn.lumen.id/commerce/digimap/file/84417e65-4d7e-4762-86b9-87dbe7a75cf8/PDP-iPhone-13-Pink-1-medium.jpeg" />
  </div>

  <!-- card body -->
  <div class="text-center mt-2">
    <div>
      <span class="text-gray-400">{{ $category }}</span>
    </div>
    <div>
      <span class="font-bold">{{ $name }}</span>
    </div>
    <div>
      <span class="text-secondary font-bold">${{ $price }}</span>
    </div>
  </div>
</a>
