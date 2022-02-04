<div>
  <div>
    <span class="font-bold text-2xl">{{ $title }}</span>
  </div>

  <!-- trending now -->
  <div class="mt-4">
    <div class="flex w-full justify-between">
      <div>
        @include('components.trending-card')
      </div>
      <div>
        @include('components.trending-card')
      </div>
      <div>
        @include('components.trending-card')
      </div>
      <div>
        @include('components.trending-card')
      </div>
    </div>
  </div>
</div>
