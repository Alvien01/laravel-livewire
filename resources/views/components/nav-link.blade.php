@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'nav-link active'
            : 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }} href="{{ $attributes->get('href') }}">
        {{ $slot }}
    </a>
</li>
