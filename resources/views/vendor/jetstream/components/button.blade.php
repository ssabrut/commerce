<button
  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center py-3 px-5 bg-secondary border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest focus:outline-none disabled:opacity-25 transition']) }}>
  {{ $slot }}
</button>
