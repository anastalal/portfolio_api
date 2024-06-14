<x-guest-layout>
    <div class=" text-[#333]">
        <div class="grid lg:grid-cols-2 gap-4 sm:p-8 p-4 h-[320px]">
          <div>
            <x-authentication-card-logo />
            <div class="max-w-lg mt-16 px-6 max-lg:hidden">
              <h3 class="text-3xl font-bold text-white">Sign in</h3>
              <p class="text-sm mt-4 text-white">Embark on a seamless journey as you sign in to your account. Unlock a realm of opportunities and possibilities that await you.</p>
            </div>
          </div>
            <x-authentication-card>
            <div class="p-4 sm:p-7">
              <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign in</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                  Don't have an account yet?
                  <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="{{ route('register') }}">
                    Sign up here
                  </a>
                </p>
              </div>
              <x-validation-errors class="mb-4" />

              @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                      {{ session('status') }}
                  </div>
              @endif
          
              <div class="mt-5">
                <form dir="ltr" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="grid gap-y-4">
                    <!-- Form Group -->
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input class="bg-gray-900" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <div class="mt-3">
                      <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm mb-2s dark:text-white">Password</label>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                      </div>
                      <div class="relative">
                        <div class="mt-4">
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div class="flex">
                        <x-checkbox id="remember-me"  class="shrink-0"  name="remember" />
                      </div>
                      <div class="ms-3">
                        <label for="remember-me" class="text-sm dark:text-white">{{ __('Remember me') }}</label>
                      </div>
                    </div>
                    <!-- End Checkbox -->
                   <x-button>
                    {{ __('Log in') }}
                   </x-button>
                  </div>
                </form>
                <!-- End Form -->
              </div>
            </div>
            </x-authentication-card>
        </div>
      </div>
</x-guest-layout>
