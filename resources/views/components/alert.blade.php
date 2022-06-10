@props([
    'icon' => null,
    'label' => null,
    'color' => 'success',
    'close' => false,
    'animation' => null,
])

@php
$attributes = $attributes->class(['uk-alert-' . $color, $animation ? 'uk-animation-' . $animation : ''])->merge([]);
@endphp

<div uk-alert {{ $attributes }}>
    @if ($close)
        <a class="uk-alert-close" uk-close></a>
    @endif
    {{ $label ?? $slot }}
</div>
