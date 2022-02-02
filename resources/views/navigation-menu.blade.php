<nav class="bg-secondary h-10 grid place-items-center">
  <div class="container 2xl:mx-auto">
    <div class="text-right">
      <div class="inline-flex">
        @if (Auth::guest())
          <div class="mr-12">
            <a class="text-white font-bold no-underline" href="{{ route('login') }}">Login</a>
          </div>
          <div>
            <a class="text-white font-bold no-underline" href="{{ route('register') }}">Create an account</a>
          </div>
        @else
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
        @endif
      </div>
    </div>
  </div>
</nav>
