<header class="py-8">
    <div class="container mx-auto px-4">
        <nav class="flex justify-between items-center text-2xl font-black">
            <a href="{{ route('notes.index') }}" class="flex">
                <h1>MyNotes</h1>
            </a>
            <a href="{{ route('notes.create') }}"
                class="flex bg-indigo-600 hover:bg-indigo-800 transition-colors duration-200 text-white px-3 py-2 rounded-md">
                Create note
            </a>
        </nav>
    </div>
</header>
