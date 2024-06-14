@props(['titel'=> '', 'img'=> ''])
<div class="max-h-30 swiper-slide p-4 md:p-7 bg-gray-100 rounded-lg ">
    {{ $slot }}
    
    {{-- <img  class="max-h-24 py-3 lg:py-5 w-16 h-autos md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-neutral-200" src="{{ $img }}" alt=""> --}}
</div>