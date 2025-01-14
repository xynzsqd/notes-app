<form {{ $attributes->class(['']) }} >
    @csrf
    {{ $slot }}
</form>
