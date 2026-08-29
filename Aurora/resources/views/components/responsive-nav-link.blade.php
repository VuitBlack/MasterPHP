@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#9B5975] text-start text-base font-semibold text-white bg-[#9B5975]/30 focus:outline-none focus:text-white focus:bg-[#9B5975]/40 focus:border-pink-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-pink-200/80 hover:text-white hover:bg-[#9B5975]/20 hover:border-[#9B5975]/60 focus:outline-none focus:text-white focus:bg-[#9B5975]/20 focus:border-[#9B5975] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
