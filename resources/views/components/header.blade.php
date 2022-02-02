<header class="bg-white h-20 drop-shadow grid place-items-center">
  <div class="container 2xl:mx-auto">
    <div class="flex items-center">
      <div class="mr-8">
        <span class="text-3xl text-secondary font-viga">Commerce</span>
      </div>
      <div class="mr-8">
        <span>Categories</span>
      </div>

      {{-- searcn bar --}}
      <div class="inline-flex w-full items-center border border-gray-300 rounded-full pl-4 mr-8">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-complement" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd"
            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
            clip-rule="evenodd" />
        </svg>
        <input class="w-full rounded-r-full border-none focus:ring-0" type="text" />
      </div>

      @auth
        <div class="mr-8">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-complement" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
          </svg>
        </div>
        <div class="mr-8 grid place-items-center">
          <button class="w-12 h-12 rounded-full overflow-hidden">
            <img class="object-cover w-12 h-12"
              src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cmFuZG9tJTIwcGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" />
          </button>
        </div>
      @endauth

      <div class="w-6 h-6 grid place-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-complement" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
        </svg>
      </div>
    </div>
  </div>
</header>
