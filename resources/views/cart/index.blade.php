<x-app-layout>
  <div class="mt-12">
    <div class="container mx-auto">
      <div>
        <h1>Cart</h1>
      </div>
      <div>
        <div>
          @foreach ($userProducts as $userProduct)
            <div>
              <span>{{ $userProduct->name }}</span>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
