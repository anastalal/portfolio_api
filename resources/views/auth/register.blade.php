<x-guest-layout>
    <div class="grid lg:grid-cols-2 gap-4 sm:p-8 p-4 h-[320px]">
        <div>
            <x-authentication-card-logo />
            <div class="max-w-lg mt-16 px-6 max-lg:hidden">
              <h3 class="text-3xl font-bold text-white">{{ __('Create Account') }}</h3>
              <p class="text-sm mt-4 text-white">Embark on a seamless journey as you sign in to your account. Unlock a realm of opportunities and possibilities that await you.</p>
            </div>
          </div>
          <x-authentication-card>
            {{-- <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot> --}}
    
            <x-validation-errors class="mb-4" />
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">{{ __('Register') }}</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                 {{ __(' have an account?') }}
                  <a class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="{{ route('login') }}">
                    {{ __('Login here') }}
                  </a>
                </p>
              </div>
    
            <form method="POST" action="{{ route('register') }}">
                @csrf
    
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input placeholder="{{ __('Your Name') }}" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
    
                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input placeholder="{{ __('Your Email') }}" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input placeholder="{{ __('Your Password') }}" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input placeholder="{{ __('Confirm Your Password') }}" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
    
                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif
                <div class="mt-4">
                    <x-button class="   w-full mt-5">
                        {{ __('Register') }}
                    </x-button>
                </div>
              
               
            </form>
        </x-authentication-card>

    </div>
  
</x-guest-layout>
