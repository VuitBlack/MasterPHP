<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-[#120E2F] border border-white/20 rounded-lg font-semibold text-xs text-white uppercase tracking-widest shadow-md hover:bg-[#1B1544] hover:shadow-lg focus:bg-[#1B1544] active:bg-[#0B081E] focus:outline-none focus:ring-2 focus:ring-pink-300 focus:ring-offset-2 focus:ring-offset-[#9B5975] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
