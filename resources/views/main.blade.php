<x-app-layout>
  <!-- banner carousel -->
  @include('components.banner')

  <!-- recenly added slider -->
  @include('components.item-slider', [
  'title' => 'Recently Added',
  'category' => 'Smartphone',
  'name' => 'Iphone 13 Pro Max',
  'price' => '$1,099'
  ])

  <div class="mt-12">
    <div class="container mx-auto">
      <div class="flex">
        <div class="max-w-screen-lg">

          <!-- trending now -->
          @include('components.trending', [
          'title' => 'Trending Now',
          'name' => 'Bluetooth Speaker',
          'total' => '1m product'
          ])
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
