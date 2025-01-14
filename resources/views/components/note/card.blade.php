@props(['href' => null])

<div class="w-full flex flex-col justify-between min-h-52 border rounded-md shadow-lg py-5 px-4">
    <div {{ $attributes }}>
        @if ($href)
            <a href="{{ $href }}">
                <h2 class="text-3xl font-medium mb-2 break-words">{{ $title }}</h2>
                <p class="text-2xl font-normal">{{ $content }}</p>
            </a>
        @else
            <h2 class="text-3xl font-medium mb-2">{{ $title }}</h2>
            <p class="text-2xl font-normal">{{ $content }}</p>
        @endif
    </div>
    {{ $slot }}
</div>
