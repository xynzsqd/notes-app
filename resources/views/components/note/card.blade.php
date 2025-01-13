<div>
    <h2>
        @if (Route::is('notes.index'))
            <a href="http://localhost/notes/1">
                {{ $title }}
            </a>
        @else
            {{ $title }}
        @endif
    </h2>
    <p>
        {{ $content }}
    </p>
</div>
