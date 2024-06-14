@props(['text'=> '', 'link'=> ''])
<a id="transform-anim"
    class="font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary-gradient rounded-full hover:bg-primary-gradient-2 hover:shadow-[0px_4px_30px]
hover:shadow-[rgb(247_176_253_/_50%)] transition-shadow duration-300 [&amp;_.highlight]:ml-2 mt-8s flex  h-12 items-center justify-center space-x-5 rtl:space-x-reverse p-[.25rem_.3rem_.25rem_1.3rem] rtl:p-[.25rem_1.3rem_.25rem_.3rem] text-base"
    href="@yield('link')" style="opacity: 1; transform: none;">
    <span class="text-white">{{ $text }}</span>
    <span class="right-0 inline-block rounded-full bg-white/50 rtl:rotate-180  p-[0.5rem]">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="h-6 w-6 text-black/60">
            <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
    </span>
</a>
