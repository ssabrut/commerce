<div class="mt-12">
  <div class="container mx-auto">
    <div>
      <span class="font-bold text-2xl">{{ $title }}</span>
    </div>

    <!-- slider -->
    <div class="mt-4">
      <div class="item-slider">
        @foreach ($items as $item)
          <div class="item">
            @include('components.item-card', $item)
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
