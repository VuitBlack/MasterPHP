@props(['user' => Auth::user()])

<div {{ $attributes->merge(['class' => 'relative rounded-full overflow-hidden flex items-center justify-center bg-[#7D4E65] shrink-0 aspect-square']) }}>
    @if ($user && $user->image)
        <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="Avatar" class="w-full h-full object-cover">
    @else
        <svg class="w-2/3 h-2/3 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
        </svg>
    @endif
</div>