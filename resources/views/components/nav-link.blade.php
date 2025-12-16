@props(['active' => false, 'type' => "button"])

@if ($type == "button")
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    {{ $attributes }}>
    {{ $slot }}
    </a>
@else
    <a class="{{ $active ? 'text-white underline' : 'text-gray-300 hover:text-white' }} text-sm font-medium"
    {{ $attributes }}>
    {{ $slot }}
    </a>
@endif
