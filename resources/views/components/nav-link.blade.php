@props(['active'])

<!-- JG -->
@php
$classes = ($active ?? false)
            ? 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-red-600 text-sm text-white/90'
            : 'inline-flex uppercase items-center px-1 pt-1 border-b-2 border-transparent text-sm text-gray-600 hover:text-white hover:border-red-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>