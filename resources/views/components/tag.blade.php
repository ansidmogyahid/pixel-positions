@props([
    'url' => '#',
    'tagTitle' => '',
    'outlined' => false,
    'noHash' => false
])

<a href="{{ $url }}" {{ $attributes->merge(['class' => 'py-1 px-3 transition-colors duration-300 rounded-full ' . ($outlined ? 'border bg-black hover:bg-white/5 border-white/15' : 'bg-white/10 hover:bg-white/20') ]) }}>
    {{ $noHash ? '' : '#' }}{{ $tagTitle != '' ? $tagTitle : $slot }}
</a>
