<x-app-layout>
  <!-- banner carousel -->
  @include('components.banner')

  <!-- recenly added slider -->
  <section>
    @include('components.item-slider', [
    'title' => 'Recently Added',
    'items' => $recentlyAddeds
    ])
  </section>

  <section class="mt-12">
    <div class="container mx-auto">

      <!-- trending now -->
      @include('components.trending', [
      'title' => 'Trending Now',
      'name' => 'Bluetooth Speaker',
      'total' => '1m product'
      ])
    </div>
  </section>
</x-app-layout>
