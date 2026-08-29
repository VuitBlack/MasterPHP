@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-[#120E2F]/90 text-white placeholder-pink-200/60 border border-white/20 focus:border-white focus:ring-2 focus:ring-pink-300/40 rounded-lg shadow-inner py-2 px-3 transition duration-150 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed']) }}>
