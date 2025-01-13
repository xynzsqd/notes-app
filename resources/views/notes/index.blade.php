@extends('layouts.base')

@section('main')
    <div class="container mx-auto px-4">
        <ul>
            @foreach ($notes as $note)
                <li>
                    <x-note.card :title="$note->title" :content="$note->content" class="mb-2">
                        <div>
                            <x-form.form method="POST" action="{{ route('notes.delete', $note->id) }}">
                                @method('DELETE')
                                <x-note.card-button>delete</x-note.card-button>
                                <x-note.card-button href="{{route('notes.edit', $note->id)}}">edit</x-note.card-button>
                            </x-form.form>
                        </div>
                    </x-note.card>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
