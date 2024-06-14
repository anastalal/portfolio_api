<!-- ========== HEADER ========== -->
<header class="sticky top-3 z-40 border-bs  inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap w-full">
    <nav class="relative max-w-[66rem] w-full bg-background/55 backdrop-blur-lg  rounded-[28px] py-4 ps-6 pe-4 md:flex md:items-center md:justify-between md:py-3 mx-2 lg:mx-auto" aria-label="Global">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../templates/agency/index.html" aria-label="Preline">
            <img class="w-28 h-autod" width="116" height="22"  src="{{ asset('assets/img/logo.png') }}" alt="Zetta Logo">
         
        </a>
        <!-- End Logo -->
  
        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-neutral-800 text-white disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          </button>
        </div>
      </div>
  
      <!-- Collapse -->
      <div id="navbar-collapse" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="/" aria-current="page">Home</a>
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">About</a>
          <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">Our Offerings</a>
          {{-- <a class="text-sm text-white hover:text-neutral-300 md:py-4 focus:outline-none focus:text-neutral-300" href="#">Approach</a> --}}
          
          <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none]   hs-dropdown-example [--placement:bottom-right] rtl:[--placement:bottom] sm:[--trigger:hover] sm:py-4">
            <button id="hs-dropdown-example"  type="button" class="hs-dropdown-toggle py-2 px-2 inline-flex items-center gap-x-2 text-sm rounded-xl border border-gray-200 b
             text-gray-800 shadow-sm  disabled:opacity-50 disabled:pointer-events-none 
            dark:bg-slate-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
            
              {{  LaravelLocalization::getCurrentLocale() }}
              <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>
            
            <div  class="hs-dropdown-menu hs-dropdown-open:left-2 w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" aria-labelledby="hs-dropdown-example">
              @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300" 
              rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
              {{ $properties['native'] }}
              </a>
               @endforeach
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->