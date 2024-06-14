@props(['bg'=> '', 'img'=> '', 'title' =>'' , 'text' => '' ,])
<li class="md:shrink md:basis-0 flex-1 group flex gap-x-4 md:gap-x-3 md:block" data-aos="zoom-in-up">
    <div
        class="min-w-7 min-h-7 flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
        <span class="flex items-center justify-center w-10 h-10   lg:h-12 lg:w-12 shrink-0 size-12 p-2 {{ $bg }} font-medium text-gray-200 rounded-full">
            <img height="100" src="{{ $img }}" alt="">
            {{-- {{ $slot }} --}}
        </span>
        <div
            class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden">
        </div>
    </div>
    <div class="grow w-full md:grow-0 md:mt-3 pb-5 h-20">
        <span class="block text-sm font-medium text-gray-300">
           {{ $title }}
        </span>
        <p class="text-sm text-gray-400">
            {{ $text }}
        </p>
    </div>
</li>