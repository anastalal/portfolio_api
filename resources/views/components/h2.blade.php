@props(['text'=> '', 'class' => 'text-center'])
<h2 id="transform-anim"
class="bg-heading-gradient bg-clip-text  {{ $class }} font-heading font-semibold  text-3xl tracking-tight text-transparent md:text-6xl md:leading-snug"
style="opacity: 1; transform: none;">
<span class="bg-primary-gradient bg-clip-text text-transparent">{{ $slot }}</span>

</h2>