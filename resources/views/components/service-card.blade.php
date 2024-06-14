@props(['title'=> '', 'text'=> '' ,'image'=> ''])
{{-- <div data-aos="fade-up" data-tilt data-tilt-glare="true" data-tilt-maxglare=".3" data-tilt-glare-border-radios="10px"
data-tilt-maxtilt="100" data-tilt-perspective="700" data-tilt-speed="400"
   class="relative max-w-96 mr-sauto place-self-center  lg:place-self-auto flex flex-col mt-6  rounded-xl border text-card-foreground shadow bg-transparent  bg-clip-border  md:w-96">
  <div class="relative h-40 md:h-40 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
      <img src="{{ $image }}"
          alt="{{ $title }}" />
  </div>
  <div class="p-6">
      <h5
          class="block mb-2 font-sanss text-xl text-transparent bg-secondary-gradient-3  bg-clip-text antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
        {{ $title }}
      </h5>
      <p class="block font-sanss text-base antialiased font-extralight leading-relaxed text-inherit">
       {{ $text }}
      </p>
  </div>
</div>
 --}}


<div  data-aos="fade-up" data-tilt data-tilt-glare="true" data-tilt-maxglare=".3" data-tilt-glare-border-radios="10px" data-tilt-maxtilt="100" data-tilt-perspective="700" data-tilt-speed="400"
   class=" p-3 gap-4 w-full h-48 items-start relative max-w-96 mr-sauto place-self-center  lg:place-self-auto flex flex-col mt-6  rounded-xl border text-card-foreground shadow bg-transparent  bg-clip-border  md:w-96">
    <span class="text-violet-600s bg-violet-500/25 p-3 text-[#d6ecff] rounded-full">
        {{ $slot }}
    </span>
   
    <div>
        <h5
        class="block mb-2 font-sanss text-xl text-transparent bg-gradient-to-l from-indigo-600 via-pink-200 to-purple-600 bg-clip-text antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
      {{ $title }}
    </h5>
        <p class="mt-1 text-gray-400">   {{ $text }}</p>
    </div>
</div>
