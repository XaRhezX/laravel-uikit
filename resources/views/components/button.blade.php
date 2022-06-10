@props([
    'icon' => null,
    'label' => null,
    'small' => null,
    'large' => null,
    'color' => 'default',
    'animation' => null,
])

@php
$attributes = $attributes->class(['uk-button', 'uk-button-' . $color, $small ? 'uk-button-small' : '', $large ? 'uk-button-large' : '', $animation ? 'uk-animation-' . $animation : ''])->merge([
    //
]);
@endphp

<button {{ $attributes }}>
    {{ $label ?? $slot }}
</button>
