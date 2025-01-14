@props(['href' => null])

@php
$defaultStyles = 'px-1 text-xl font-semibold uppercase transition-colors duration-200';
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class([$defaultStyles]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class([$defaultStyles]) }}>{{ $slot }}</button>
@endif
