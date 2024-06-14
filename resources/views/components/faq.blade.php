@props(['title' => '','content'=>''])
    <div class="hs-accordion   rounded-xl dark:hs-accordion-active:border-purple-400 bg-backgrounds border border-solid border-gray-600 p-1 mb-8" id="hs-active-bordered-heading-one">
      <button class="hs-accordion-toggle text-gray-300 inline-flex justify-between items-center gap-x-3 w-full font-semibold text-start py-4 px-5 hover:text-gray-500 disabled:opacity-50 disabled:pointer-events-none hs-accordion-active:text-purple-300  dark:hover:text-purple-400 dark:focus:outline-none dark:focus:text-neutral-400" aria-controls="hs-basic-active-bordered-collapse-one">
        <h3>{{ $title }}</h3>
        <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
          <path d="M12 5v14"></path>
        </svg>
        <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M5 12h14"></path>
        </svg>
      </button>
      <div id="hs-basic-active-bordered-collapse-one" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-active-bordered-heading-one">
        <div class="pb-4 px-5">
          <p class="text-gray-800 dark:text-neutral-200">
         <em>{{ $content }}</em>
          </p>
        </div>
      </div>
    </div>
  
   
