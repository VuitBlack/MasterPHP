@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-[#9B5975] text-sm font-semibold leading-5 text-white focus:outline-none focus:border-pink-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-pink-200/80 hover:text-white hover:border-[#9B5975]/60 focus:outline-none focus:text-white focus:border-[#9B5975] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
