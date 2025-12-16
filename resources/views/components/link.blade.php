@props(['active' => false, 'type' => 'button', 'color' => 'light'])
@php
    $textActive = ($color == 'light') ? 'text-white' : 'text-black';
    $textInactive = ($color == 'light') ? 'text-gray-300 hover:text-white' : 'text-gray-800 hover:text-black';
@endphp

@if ($type == "button")
    <a class="{{ $active ? 'bg-gray-900 ' . $textActive : 'hover:bg-white/5 ' . $textInactive }} rounded-md px-3 py-2 text-sm font-medium"
    {{ $attributes }}>
    {{ $slot }}
    </a>
@else
    <a class="{{ $active ? 'underline ' . $textActive : $textInactive }} text-sm font-medium"
    {{ $attributes }}>
    {{ $slot }}
    </a>
@endif
