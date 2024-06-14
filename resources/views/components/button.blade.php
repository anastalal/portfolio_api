{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
{{-- @props(['text'=> '', 'link'=> '']) --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-medium focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary-gradient rounded-full hover:bg-primary-gradient-2 hover:shadow-[0px_4px_30px]
    hover:shadow-[rgb(247_176_253_/_50%)] transition-shadow duration-300 [&amp;_.highlight]:ml-2 mt-8s flex  h-12 items-center justify-center space-x-5 rtl:space-x-reverse p-[.25rem_.3rem_.25rem_1.3rem] rtl:p-[.25rem_1.3rem_.25rem_.3rem] text-base']) }}
     style="opacity: 1; transform: none;">
     {{ $slot }}
    
</button>
