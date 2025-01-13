<div class="border py-5 px-4">
    <div {{ $attributes }}>
        <h2 class="text-3xl font-medium mb-2">{{ $title }}</h2>
        <p class="text-2xl font-normal">{{ $content }}</p>
    </div>
    {{ $slot }}
</div>
