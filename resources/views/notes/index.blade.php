@extends('layouts.base')

@section('main')
    <div class="container flex justify-center items-center mx-auto px-4 min-h-full">
        <ul class="grid lg:grid-cols-2 xl:grid-cols-3 gap-4 w-full">
            @foreach ($notes as $note)
                <li class="">
                    <x-note.card :title="$note->title" :content="Str::limit($note->content, 20)" :href="route('notes.show', $note->id)">
                        <div class="self-end">
                            <x-form.form class="flex gap-x-3" method="POST" action="{{ route('notes.delete', $note->id) }}">
                                @method('DELETE')
                                <x-note.card-button class="text-red-600 hover:text-red-800">delete</x-note.card-button>
                                <x-note.card-button class="text-blue-600 hover:text-blue-800"
                                    href="{{ route('notes.edit', $note->id) }}">edit</x-note.card-button>
                            </x-form.form>
                        </div>
                    </x-note.card>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
