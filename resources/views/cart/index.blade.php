<x-app-layout>
  <div class="mt-12">
    <div class="container mx-auto">
      <div class="mb-4">
        <span class="text-3xl font-bold">Your Cart</span>
      </div>
      <div class="grid grid-cols-12">
        <div class="col-span-8">
          @foreach ($userProducts as $userProduct)
            @livewire('cart', [
            'name' => $userProduct->product_name,
            'price' => $userProduct->price,
            'quantity' => $userProduct->quantity,
            'merchant' => $userProduct->merchant_name
            ])
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
