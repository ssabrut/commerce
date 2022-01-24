<button
  {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center py-3 bg-secondary border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
  {{ $slot }}
</button>
