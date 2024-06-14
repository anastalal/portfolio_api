<!-- Contact -->
<div class="bg-background">
    <div class="max-w-5xl px-4 xl:px-0 py-10 lg:py-20 mx-auto">
      <!-- Title -->
      <div class="max-w-3xl mb-10 lg:mb-14">
        <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">{{ __('messages.contact_us') }}</h2>
        <p class="mt-1 text-neutral-400">{{ __('Whatever your goal - we will get you there.') }}</p>
      </div>
      <!-- End Title -->
  
      <!-- Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16">
        <div class="md:order-2 border-b border-neutral-800 pb-10 mb-10 md:border-b-0 md:pb-0 md:mb-0">
          <form>
            <div class="space-y-4">
              <!-- Input -->
              <div class="relative">
                <input type="text" id="hs-tac-input-name" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2" placeholder="{{ __('messages.name') }}">
                <label for="hs-tac-input-name" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">{{ __('messages.name') }}</label>
              </div>
              <!-- End Input -->
  
              <!-- Input -->
              <div class="relative">
                <input type="email" id="hs-tac-input-email" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2" placeholder="{{ __('messages.email') }}">
                <label for="hs-tac-input-email" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">{{ __('messages.email') }}</label>
              </div>
              <!-- End Input -->
  
              <!-- Input -->
              {{-- <div class="relative">
                <input type="text" id="hs-tac-input-company" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2" placeholder="Company">
                <label for="hs-tac-input-company" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">Company</label>
              </div> --}}
              <!-- End Input -->
  
              <!-- Input -->
              <div class="relative">
                <input type="text" id="hs-tac-input-phone" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2" placeholder="{{ __('messages.phone') }}">
                <label for="hs-tac-input-phone" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">{{ __('messages.phone') }}</label>
              </div>
              <!-- End Input -->
  
              <!-- Textarea -->
              <div class="relative">
                <textarea id="hs-tac-message" class="peer p-4 block w-full bg-neutral-800 border-transparent rounded-lg text-sm text-white placeholder:text-transparent focus:outline-none focus:ring-0 focus:border-transparent disabled:opacity-50 disabled:pointer-events-none
                focus:pt-6
                focus:pb-2
                [&:not(:placeholder-shown)]:pt-6
                [&:not(:placeholder-shown)]:pb-2
                autofill:pt-6
                autofill:pb-2" placeholder="{{ __('Describe which services you need') }}"></textarea>
                <label for="hs-tac-message" class="absolute top-0 start-0 p-4 h-full text-neutral-400 text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none
                  peer-focus:text-xs
                  peer-focus:-translate-y-1.5
                  peer-focus:text-neutral-400
                  peer-[:not(:placeholder-shown)]:text-xs
                  peer-[:not(:placeholder-shown)]:-translate-y-1.5
                  peer-[:not(:placeholder-shown)]:text-neutral-400">{{ __('Describe which services you need') }}</label>
              </div>
              <!-- End Textarea -->
            </div>
  
            <div class="mt-2">
              <p class="text-xs text-neutral-500">
               {{ __('All fields are required') }}
              </p>
  
              <p class="mt-5">
                <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-primary-gradient font-medium text-sm text-neutral-200 rounded-full focus:outline-none" href="#">
                 {{__('messages.submit')}}
                  <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5 group-hover:translate-x-0 group-focus:translate-x-0.5 group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </p>
            </div>
          </form>
        </div>
        <!-- End Col -->
  
        <div class="space-y-14">
          <!-- Item -->
          <div class="flex gap-x-5">
            <svg class="flex-shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            <div class="grow">
              <h4 class="text-white font-semibold">{{ __('Our address') }}:</h4>
  
              <address class="mt-1 text-neutral-400 text-sm not-italic">
                {{ __('King Salman Bin Abdulaziz Rd, An Narjis, Riyadh 13327') }}
              </address>
            </div>
          </div>
          <!-- End Item -->
  
          <!-- Item -->
          <div class="flex gap-x-5">
            <svg class="flex-shrink-0 size-6 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"/><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"/></svg>
            <div class="grow">
              <h4 class="text-white font-semibold">{{ __('Email us') }}:</h4>
  
              <a class="mt-1 text-neutral-400 text-sm" href="mailto:info@zettatech.sa.com" target="_blank">
                info@zettatech.sa.com
              </a>
            </div>
          </div>
          <!-- End Item -->
  
          <!-- Item -->
          <div class="flex gap-x-5">
            <svg class="flex-shrink-0 size-6 text-neutral-500" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.7354 20.1912C12.4288 20.0506 12.1222 19.91 11.8155 19.7438C10.3132 18.8948 8.93344 17.8452 7.71409 16.6237C6.13308 15.1347 4.83446 13.3715 3.88102 11.4195C3.37018 10.371 3.02534 9.24943 2.85888 8.09491C2.63218 6.92878 2.76129 5.72138 3.2294 4.62967C3.5179 4.1606 3.86576 3.73081 4.26434 3.35098C4.4259 3.16987 4.62235 3.02329 4.84191 2.92002C5.06145 2.81674 5.29959 2.75891 5.54202 2.75C6.04667 2.82558 6.50357 3.09079 6.81971 3.49163C7.50966 4.25884 8.25073 4.94934 8.97901 5.67819C9.26577 5.92439 9.44467 6.27328 9.47731 6.64999C9.46502 6.96695 9.34308 7.26979 9.13234 7.50671C8.88958 7.8136 8.5957 8.09491 8.31461 8.389C8.14496 8.55247 8.01523 8.75286 7.93546 8.97461C7.85569 9.19636 7.82804 9.43352 7.85464 9.66769C8.03017 10.2161 8.33217 10.7154 8.73625 11.1254C9.22177 11.7903 9.70729 12.4041 10.2566 13.0562C11.2438 14.1969 12.4141 15.1649 13.7192 15.9205C13.8996 16.0569 14.1129 16.143 14.3373 16.1699C14.5618 16.1969 14.7895 16.1638 14.9969 16.0739C15.4308 15.831 15.8162 15.5103 16.1341 15.1276C16.4089 14.7926 16.8028 14.5773 17.2329 14.5267C17.6156 14.5462 17.9765 14.7108 18.2423 14.987C18.5872 15.2812 18.8811 15.6264 19.2006 15.946C19.52 16.2657 19.7755 16.4959 20.0438 16.79C20.3651 17.0731 20.668 17.3764 20.9509 17.6979C21.1704 17.9817 21.2752 18.3377 21.2449 18.6952C21.131 19.1226 20.885 19.503 20.5422 19.7822C20.0598 20.2841 19.4737 20.6748 18.8249 20.9265C18.1761 21.1783 17.4801 21.2852 16.7857 21.2398C15.3798 21.1609 14.0033 20.8046 12.7354 20.1912Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
            </svg>                
            <div class="grow">
              <h4 class="text-white font-semibold">{{ __('Phone Number') }}</h4>
              <a class="mt-1 text-neutral-400 text-sm" href="tel:+996503564670" target="_blank">
                +996 503564670
              </a>
              {{-- <p class="mt-1 text-neutral-400">We're thrilled to announce that we're expanding our team and looking for talented individuals like you to join us.</p>
              <p class="mt-2">
                <a class="group inline-flex items-center gap-x-2 font-medium text-sm text-[#ff0] decoration-2 hover:underline focus:outline-none focus:underline" href="#">
                  Job openings
                  <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5 group-hover:translate-x-0 group-focus:translate-x-0.5 group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </p> --}}
            </div>
          </div>
          <!-- End Item -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </div>
  </div>
  <!-- End Contact -->