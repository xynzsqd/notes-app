@props(['href' => null])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class(['text-lg font-medium']) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->class(['text-lg font-medium']) }}>{{ $slot }}</button>
@endif
