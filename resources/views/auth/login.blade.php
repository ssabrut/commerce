<x-guest-layout>
  <x-jet-authentication-card>
    <x-slot name="logo">
      <x-jet-authentication-card-logo />
    </x-slot>

    <x-slot name="header">
      <x-jet-authentication-card-header />
    </x-slot>

    {{-- <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
      </div>
    @endif --}}

    {{-- login form --}}
    <form>
      @csrf
      {{-- email field --}}
      <div>
        <x-jet-label for="email" value="{{ __('Email Address') }}" />
        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
          autofocus />
      </div>

      {{-- password field --}}
      <div class="mt-6">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
          autocomplete="current-password" />
      </div>

      {{-- remember me --}}
      <div class="mt-6 flex items-center justify-between">
        <label for="remember_me" class="flex items-center">
          <x-jet-checkbox id="remember_me" name="remember" />
          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>

        @if (Route::has('password.request'))
          <a class="text-sm text-secondary" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
        @endif
      </div>

      {{-- login button --}}
      <div class="mt-6">
        <x-jet-button class="w-full text-center">
          {{ __('Login') }}
        </x-jet-button>
      </div>

      {{-- login option --}}
      <div class="mt-6">
        <x-jet-authentication-card-option />
      </div>
    </form>
  </x-jet-authentication-card>
</x-guest-layout>
