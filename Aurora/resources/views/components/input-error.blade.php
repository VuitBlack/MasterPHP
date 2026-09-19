@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-amber-400 font-semibold space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif