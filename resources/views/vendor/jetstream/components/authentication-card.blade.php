<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="mt-6 text-center font-bold">
        {{ $header }}
    </div>

    <div class="w-full sm:max-w-xl mt-6 p-12 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
